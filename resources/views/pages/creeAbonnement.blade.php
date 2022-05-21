@extends('templates.template', ['titre' => "S'abonner"])

@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="inner-page-banner bg-common inner-page-top-margin"
        data-bg-image="{{ asset('assets/img/slider/figure2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Abonnez-vous</h1>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li>S'abonner</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area Start Here -->
    <section class="appointment-wrap-layout1 bg-light-accent100">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-xl-6">
                    <div class="appointment-box-layout1">

                        <div class="col-xl-12 ">
                            <p class="text-danger">
                                @if (session()->has('message'))
                                {{ session()->get('message') }}
                                @endif
                            </p>
                            @foreach ($errors->all() as $err)
                                <p class="text-danger">
                                    {{ $err }}
                                </p>
                            @endforeach
                        </div>
                        @if (Auth::guest())
                            <h2 class="title title-bar-primary2">Créer votre compte</h2>
                            <p>
                                L'adresse e-mail que vous utiliserez pour vous connecter
                            </p>
                        @endif
                        <form action="{{ url('abonnement') }}" method="POST" data-parsley-validate>
                            @csrf
                            @if (Auth::guest())
                                <div class="row gutters-15">
                                    <div class="col-md-12 form-group">
                                        <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                            id="form-email" value="{{ old('email') }}"
                                            data-error="E-mail field is required" data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Votre Nom*" class="form-control" name="name"
                                            id="name" value="{{ old('name') }}" data-error="Champ obligatoire"
                                            data-parsley-minlength="3" data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Votre prenom*" class="form-control" name="prenom"
                                            id="prenom" data-error="Champ obligatoir" required
                                            value="{{ old('prenom') }}" data-parsley-minlength="3"
                                            data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" placeholder="Téléphone *" class="form-control" name="telephone"
                                            id="telephone" data-error="Champ obligatoire" required
                                            value="{{ old('telephone') }}" data-parsley-minlength="3"
                                            data-parsley-trigger="change">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="password" placeholder="Mot de passe *" class="form-control"
                                            data-parsley-minlength="5" data-parsley-trigger="change" name="password"
                                            id="password" data-error="Champ obligatoire" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="password" placeholder="Repetez mot de passe" class="form-control"
                                            name="password_confirmation" id="password_confirmation"
                                            data-parsley-equalto="#password" data-parsley-minlength="5"
                                            data-parsley-trigger="change" data-error="Champ obligatoire" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            @endif

                            <h2 class="title title-bar-primary2">Procédez au paiement</h2>
                            <div class="row gutters-15">
                                <div {{ isset($ab) && $ab != '' ? 'hidden' : '' }}>
                                    @if (isset($ab) && $ab != '')
                                        <div class="col-12 form-group">
                                            <input type="text" class="form-control" name="abonnement_id"
                                                value="{{ $ab->id }}" id="abonnement_id"
                                                data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" class="form-control" name="prix"
                                                value="{{ $ab->prix }}" id="prix">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" class="form-control" name="monaie"
                                                value="{{ $ab->monaie }}" id="monaie">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-12 form-group carte">
                                    <select class="select2 moyen" name="channels" onchange="switch_modepaie(this.value)"
                                        data-error="Champ obligatoire" id='channels' required>
                                        <option value="" selected>Selectionnez le moyen de paiement *</option>
                                        <option value="MOBILE_MONEY">Mobile money</option>
                                        <option value="CREDIT_CARD">Carte bancaire</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <section class="col-12 " id="carte" style="display: none">
                                    @include('pages.listepays')

                                    <div class="col-12 form-group">
                                        <input type="text" placeholder="Votre ville *" class="form-control carte2"
                                            value="{{ old('customer_city') }}" name="customer_city" id="customer_city"
                                            data-error="Name field is required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" placeholder="Votre Etat *" class="form-control carte2"
                                            name="customer_state" id="customer_state"
                                            value="{{ old('customer_state') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" placeholder="Code postal *"
                                            value="{{ old('customer_zip_code') }}" class="form-control carte2"
                                            name="customer_zip_code" id="customer_zip_code">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Votre adresse" class="textarea form-control carte2" name="customer_address" id="customer_address"
                                            rows="5" cols="20">
                                            {{ old('customer_address') }}
                                        </textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </section>
                                <div class="col-12 form-group text-center">
                                    <button class="item-btn">Envoyer le paiement</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="appointment-banner">
                        <img src="{{ asset('assets/img/slider/figure2.png') }}" alt="appointment" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area End Here -->
@endsection
@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var moyen = document.querySelector('select.moyen').value;
            switch_modepaie(moyen);
        });

        function switch_modepaie(val) {
            switch (val) {
                case "MOBILE_MONEY":
                    // document.getElementById('carte').setAttribute('hidden');
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");
                    el.forEach(element => {
                        element.removeAttribute("required");
                    });
                    break;
                case "CREDIT_CARD":
                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').setAttribute('required', "true");
                    el.forEach(element => {
                        element.setAttribute('required', "true");
                    });
                    document.getElementById('carte').style.display = "block";
                    // document.getElementById('carte').removeAttribute('hidden');
                    break;
                case "":
                    document.getElementById('carte').style.display = "none";

                    var el = document.querySelectorAll('input.carte2');
                    document.querySelector('select.carte2').removeAttribute("required");;
                    el.forEach(element => {
                        element.removeAttribute("required");
                    });

                    break;
            }
        }
    </script>
@endsection
