<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\service;
use App\Models\abonnement;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mines=User::with('abonnement')->where("id",Auth::user()->id)->first();
       
       $mines=User::with('abonnement')
          ->selectRaw('abonnements.*,abonnement_users.*')
          ->join('abonnement_users','abonnement_users.user_id','users.id')
        //   ->join('service_abonnements','service_abonnements.abonnement_id','abonnements.id')
          ->join('abonnements','abonnements.id','abonnement_users.abonnement_id')
        //   ->join('abonnements','abonnements.id','service_abonnements.abonnement_id')
        //   ->join('actes','actes.id','acte_services.acte_id')
          ->where([["abonnement_users.user_id",Auth::user()->id],["abonnement_users.etat","Payer"]])
        //   ->where([["abonnement_users.user_id",Auth::user()->id],["abonnement_users.etat","Payer"]])
          ->get();
       //dd($mines);
        return view("pages.mesAbonnements",compact("mines"));
    }
    public function profil()
    {
        
    }
    public function historique()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreserviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceRequest  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
