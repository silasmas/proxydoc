<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\User;
use App\Models\paiement;
use App\Models\abonnement;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Models\abonnementUser;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateabonnementRequest;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.abonnement');
    }
    public function detail()
    {
        return view('pages.detailAbonnement');
    }
    public function docteur()
    {
        return view('pages.docteurs');
    }
    public function detailDocteur()
    {
        return view('pages.detailDocteur');
    }
    public function verifyCompte($email)
    {
        $rep = [];
        $u = User::where([["email", $email]])->first();
        if ($u) {
            if ($u->email_verified_at == null) {
                $rep = [true, false];
                return $rep;
            } else {
                $rep = [true, true];
                return $rep;
            }
        } else {
            $rep = [false, false];
            return $rep;
        }
    }
    public function verifyLogin($id)
    {
        $verify = explode('.', $id);
        $id = $verify[0];
        $u = User::where("id", $id)->first();

        if ($u) {
            event(new Registered($u));

            Auth::login($u);
            return true;
        } else {
            return false;
        }
    }
    public function notify(Request $request)
    {
        $retour = abonnementUser::where(["transaction_id", $request->transaction_id])->first();
        //  dd($request->transaction_id);

        if ($retour) {
            $response_body = self::verifyStatus($request);
            if ((int)$response_body["code"] === 201 || $response_body["message"] == "SUCCES") {
                $retour->etat = 'Payer';
                $retour->reponse = $response_body['data']['payment_method'];
                $retour->message = $response_body['message'];
                $retour->save();
                $operateur = $retour->operateur;
                $data = $response_body;
                $login = self::verifyLogin($request->transaction_id);
                return view('client.pages.notify', compact('data', 'operateur'));
            } else {
                // $retour->etat = "En attente";
                $retour->reponse = $response_body['data']['payment_method'];
                $retour->message = $response_body['message'];
                $retour->save();
                $operateur = $retour->operateur;
                $data = $response_body;
                return view('client.pages.notify', compact('data', 'operateur'));
            }
        } else {

            $response_body = self::verifyStatus($request);
            $data = $response_body;
            $etat = "Erreur d'enregistrement";
            $operateur = $retour->operateur;
            return view('client.pages.notify', compact('data', "etat", "operateur"));
        }
    }
    public function retour(Request $request)
    {

        $retour = abonnementUser::where(["transaction_id", $request->transaction_id])->first();
        $paiement = paiement::where(["transaction_id", $request->transaction_id])->first();

        if ($retour) {

            $response_body = self::verifyStatus($request);
            // dd($response_body);
            if ((int)$response_body["code"] === 201 || $response_body["message"] == "SUCCES") {
                $delait = self::delait($retour->abonnement_id);
                $retour->etat = 'Payer';
                $retour->date_debut = $delait[0];
                $retour->date_fin = $delait[1];
                $retour->save();

                $paiement->type = 'Payer';
                $paiement->moyenPaiement = $response_body['data']['payment_method'];
                $paiement->message = $response_body['message'];
                $paiement->save();



                $operateur = $retour->operateur;
                $data = $response_body;

                $login = self::verifyLogin($request->transaction_id);
                return view('pages.notify', compact('data', 'operateur'));
            } else {
                // $retour->etat = "En attente";
                $retour->reponse = $response_body['data']['payment_method'];
                $retour->message = $response_body['message'];
                $retour->save();
                $operateur = $retour->operateur;
                $data = $response_body;
                return view('pages.notify', compact('data', 'operateur'));
            }
        } else {

            $response_body = self::verifyStatus($request);
            $data = $response_body;
            $etat = "Erreur d'enregistrement";
            $operateur = $retour->operateur;
            //  dd($response_body."retour erreur");
            return view('client.pages.notify', compact('data', "etat", "operateur"));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initinfo_paiement()
    {
    }
    public function verifyStatus($request)
    {
        $url = 'https://api-checkout.cinetpay.com/v2/payment/check';
        $cinetpay_verify =  [
            "apikey" => env("CINETPAY_APIKEY"),
            "site_id" => env("CINETPAY_SERVICD_ID"),
            "transaction_id" => $request->transaction_id,
        ];
        $response = Http::asJson()->post($url, $cinetpay_verify);
        $response_body = json_decode($response->body(), JSON_THROW_ON_ERROR | true, 512, JSON_THROW_ON_ERROR);

        return $response_body;
    }
    public function genererTransaction_id($id, $longueur = 10)
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++) {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
        $idHash = $id . "." . $chaineAleatoire;
        return $idHash;
    }
    public function verivyInfo_paiement($request)
    {
        if ($request->channels == "MOBILE_MONEY") {
            return $request->validate([
                'abonnement_id' => ['required'],
                'prix' => ['required'],
                'monaie' => ['required'],
            ]);
        } else {
            return $request->validate([
                'abonnement_id' => ['required'],
                'prix' => ['required'],
                'monaie' => ['required'],
                'customer_city' => ['required', 'string', 'max:255'],
                'customer_zip_code' => ['required', 'string', 'max:255'],
                'customer_address' => ['required', 'string', 'max:255'],
            ]);
        }
    }
    public function initInfo($request, $transaction_id)
    {

        if ($request->channels == "MOBILE_MONEY") {
            $cinetpay_data =  [
                "amount" => $request->prix,
                "currency" => $request->monaie,
                "apikey" => env("CINETPAY_APIKEY"),
                "site_id" => env("CINETPAY_SERVICD_ID"),
                "transaction_id" => $transaction_id,
                "description" => "Achat formation",
                "return_url" => env("RETURN_URL"),
                "notify_url" => env("NOTIFY_URL"),
                'channels' => $request["channels"],
            ];
            return $cinetpay_data;
        } else {
            $cinetpay_data =  [
                "amount" => $request->prix,
                "currency" => $request->monaie,
                "apikey" => env("CINETPAY_APIKEY"),
                "site_id" => env("CINETPAY_SERVICD_ID"),
                "transaction_id" => $transaction_id,
                "description" => "Achat formation",
                "return_url" => env("RETURN_URL"),
                "notify_url" => env("NOTIFY_URL"),
                'channels' => $request["channels"],
                'customer_name' => Auth::user()->name,
                'customer_city' => $request["customer_city"],
                'customer_email' => Auth::user()->email,
                'customer_surname' => Auth::user()->prenom,
                'customer_address' => $request["customer_address"],
                'customer_country' => $request["customer_country"],
                'customer_zip_code' => $request["customer_zip_code"],
                'customer_phone_number' => Auth::user()->phone,
                'customer_state' => $request["customer_state"],
            ];
            return $cinetpay_data;
        }
    }
    public function initPaie($cinetpay_data, $request, $user)
    {

        $url = 'https://api-checkout.cinetpay.com/v2/payment';
        $response = Http::asJson()->post($url, $cinetpay_data);

        $response_body = json_decode($response->body(), JSON_THROW_ON_ERROR | true, 512, JSON_THROW_ON_ERROR);
        if ($response->status() === 200) {

            $register = abonnementUser::updateOrCreate([
                "abonnement_id" => $request['abonnement_id'],
                "user_id" => $user->id,
            ], [
                "transaction_id" => $cinetpay_data['transaction_id'],
                'etat' => "En attente",
            ]);
            $paiementInfo = paiement::updateOrCreate([
                "transaction_id" => $request['abonnement_id'],
                "user_id" => $user->id,
            ], [
                "transaction_id" => $cinetpay_data['transaction_id'],
                "description" => "Paiement Abonnement",
                "token" => $response_body["data"]["payment_token"],
                'customer_address' => $request["customer_address"],
                'customer_city' => $request["customer_city"],
                'operateur' => $request["channels"],
                'customer_country' => $request["customer_country"],
                'customer_state' => $request["customer_state"],
                'customer_zip_code' => $request["customer_zip_code"],
            ]);

            if ($register && $paiementInfo) {
                if ((int)$response_body["code"] === 201) {
                    $payment_link = $response_body["data"]["payment_url"];
                    return  Redirect::to($payment_link);
                } else {
                    return back()->with('message', $response_body['description']);
                    // return response()->json(['reponse' => false, 'bank' => true, 'msg' => $response_body['description']]);
                }
            } else {
                return back()->with('message', "Erreur d'enregistrement!");
                //return response()->json(['reponse' => false, 'bank' => true, 'msg' => "Erreur d'enregistrement!"]);
            }
        } else {
            return back()->with('message', $response_body['description']);
            // return response()->json(['reponse' => false, 'bank' => true, 'msg' => $response_body['description']]);
        }
    }
    /**
     * on verifi si celui qui veux s'abonner a un compte si oui on le crée 
     *et puis on passe au paiement sinon on passe directement au paiement
     *
     * @param  \App\Http\Requests\StoreabonnementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::guest()) {
            $transaction_id = self::genererTransaction_id(Auth::user()->id);
            $verification = self::verivyInfo_paiement($request);
            if ($verification) {
                $init = self::initInfo($request, $transaction_id);
                return $ret = self::initPaie($init, $request->toArray(), $user);
            }
        } else {
            $compteExiste = self::verifyCompte($request->email);
             //dd($compteExiste[0]);
            if ($compteExiste[0] == true) {
                if ($compteExiste[1] == true) {
                    return back()->with('message', 'Cet email a déjà un compte merci de vous connecté pour continuer le paiement');
                } else {
                    $request->validate([
                        'name' => ['required', 'string', 'max:255'],
                        'prenom' => ['required', 'string', 'max:255'],
                        'telephone' => ['required', new PhoneNumber],
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'password' => ['required', 'confirmed', Rules\Password::defaults()],
                    ]);
                    $user=User::where("email",$request->email)->first();
                        $transaction_id = self::genererTransaction_id($user->id);
                        $verification = self::verivyInfo_paiement($request);
                        if ($verification) {
                            $init = self::initInfo($request, $transaction_id);
                            return $ret = self::initPaie($init, $request->toArray(), $user);
                        }
                    
                }
            } else {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'telephone' => ['required', new PhoneNumber, 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
                //ici on crée le compte du user
                $user = User::create([
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'telephone' => $request->telephone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                if ($user) {
                    $transaction_id = self::genererTransaction_id($user->id);
                    $verification = self::verivyInfo_paiement($request);
                    if ($verification) {
                        $init = self::initInfo($request, $transaction_id);
                        return $ret = self::initPaie($init, $request->toArray(), $user);
                    }
                } else {
                    return back()->with('message', 'Erreur de création de compte!');
                }
            }
        }
    }

    public function delait($id)
    {
        $ab = abonnement::find($id);
        $delais = [];
        if ($ab->temps == 'Ans') {
            $dd = Carbon::now();
            $df = Carbon::now()->addYears((int)$ab->duree);
            $delais = [$dd, $df];
            return $delais;
        } else {
            $dd = Carbon::now();
            $df = Carbon::now()->addMonth((int)$ab->duree);
            $delais = [$dd, $df];
            return $delais;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $abonnement= $abonnement=abonnement::with('service','service.acte')->joinRelationship('service')->where('abonnements.id',$id)->get();
        $abonnement = abonnement::with('service', 'service.acte')->where('abonnements.id', $id)->first();
        $ab = abonnement::with('service')->where('id', $id)->first();

        return view('pages.creeAbonnement', compact("abonnement", "ab"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function edit(abonnement $abonnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateabonnementRequest  $request
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateabonnementRequest $request, abonnement $abonnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function destroy(abonnement $abonnement)
    {
        //
    }
}
