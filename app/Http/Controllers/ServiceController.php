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
        $m=Auth::user()->abonnement;
    $mines = $m->filter(function ($value, $key) {
        return $value->pivot->etat == "Payer";
    });
        // dd($mines);
        return view("pages.mesAbonnements",compact("mines"));
    }
    public function profil()
    {
        $m=Auth::user()->abonnement;
        $mines = $m->filter(function ($value, $key) {
            return $value->pivot->etat == "Payer";
        });
        return view("pages.profil",compact("mines"));
    }
    public function historique()
    {
        return view("pages.historique");
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
