@extends('templates.template')
@section('title', 'Mon profil')
@section('page', 'profil')

@section('autreStyle')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
    <link href="{{ asset('js/sweetalert/sweetalert.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('parties.banner')
    <!-- Doctors Detail Start Here -->
    <section class="appointment-wrap-layout1 bg-light-accent100">
        <div class="container">
            <div class="row gutters-15">
                <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-12">
                    <div class="appointment-box-layout1">
                        <div class="single-item">
                            <h2 class="title title-bar-primary2">Changer photo de profil :</h2>
                            <p>Efficiently myocardinate market-driven innovation via open-source alignments.
                                Dramatically engage high-Phosfluorescently expedite impactful supply chains via
                                focused results. Holistically . Compellingly supply just in time catalysts for
                                change through..</p>
                        </div>
                        <div class="single-item">
                            <h2 class="title title-bar-primary2">Modifier vos informations :</h2>
                            <form action="" data-parsley-validate>
                                <div class="row gutters-15">
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Votre Nom*" class="form-control" name="name"
                                            id="name" value="{{ Auth::user()->nom }}" data-error="Champ obligatoire"
                                            data-parsley-minlength="3" data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Votre prenom*" class="form-control" name="prenom"
                                            id="prenom" data-error="Champ obligatoir" required
                                            value="{{ Auth::user()->prenom }}" data-parsley-minlength="3"
                                            data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                            id="form-email" value="{{ Auth::user()->email }}"
                                            data-error="E-mail field is required" data-parsley-trigger="change" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Téléphone *" class="form-control" name="telephone"
                                            id="telephone" data-error="Champ obligatoire" required
                                            value="{{ Auth::user()->telephone }}" data-parsley-minlength="3"
                                            data-parsley-trigger="change">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-6 form-group">
                                        <select class="select2" name="sexe" data-error="Champ obligatoire" required>
                                            <option value="">Selectionnez un genre *</option>
                                            <option value="HOMME">HOMME</option>
                                            <option value="FEMME">FEMME</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <i class="far fa-calendar-alt"></i>
                                        <input type="text" class="form-control rt-date" placeholder="Date de naissance *"
                                             id="form-date" name="datenaissance" value="{{ Auth::user()->datenaissance }}" data-error="Subject field is required" required />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" placeholder="Ville *" class="form-control" name="ville"
                                            id="ville" data-error="Champ obligatoire" required
                                            value="{{ Auth::user()->ville }}" data-parsley-minlength="3"
                                            data-parsley-trigger="change">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-6 form-group">
                                        @include("parties.listepays")
                                    </div>
                                    
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Votre adresse" class="textarea form-control carte2" name="customer_address" id="customer_address"
                                            rows="5" cols="20">
                                            {{ Auth::user()->adresse }}
                                        </textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group text-center">
                                        <button class="item-btn">Modifier</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="single-item">
                            <h2 class="title title-bar-primary2">Modifier le mot de passe :</h2>

                            <form action="" data-parsley-validate>
                                <div class="row gutters-15">
                                    <div class="col-md-12 form-group">
                                        <input type="password" placeholder="Ancien Mot de passe *" class="form-control"
                                            data-parsley-minlength="5" data-parsley-trigger="change" name="oldpassword"
                                            id="oldpassword" data-error="Champ obligatoire" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" placeholder="Nouveau Mot de passe *" class="form-control"
                                            data-parsley-minlength="5" data-parsley-trigger="change" name="newpassword"
                                            id="newpassword" data-error="Champ obligatoire" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="password" placeholder="Repetez nouveau mot de passe"
                                            class="form-control" name="password_confirmation" id="password_confirmation"
                                            data-parsley-equalto="#newpassword" data-parsley-minlength="5"
                                            data-parsley-trigger="change" data-error="Champ obligatoire" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group text-center">
                                        <button class="item-btn">Changer mot de passe</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="order-xl-1 order-lg-1 sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-md-12 col-12">
                    <div class="widget widget-about-team">
                        <img src="{{ asset('assets/img/slider/profil1.jpg') }}" class="img-fluid" alt="team">
                        <div class="item-content">
                            <h3 class="item-title">{{ Auth::user()->prenom . ' ' . Auth::user()->nom }}</h3>
                            <p class="item-ctg">{{ Auth::user()->sexe }}</p>
                            <span class="item-designation">{{ Auth::user()->pays }}</span>
                        </div>
                    </div>
                    <div class="widget widget-team-contact">
                        <h3 class="section-title title-bar-primary2">Infos personnelles</h3>
                        <ul>
                            <li>Phone : <span>{{ Auth::user()->telephone }}</span></li>
                            <li>E-mail : <span>{{ Auth::user()->email }}</span></li>
                            <li>Date naiss. : <span>{{ Auth::user()->datenaissance }}</span></li>
                            <li>Ville : <span>{{ Auth::user()->ville }}</span></li>
                            <li>Adresse : <span>{{ Auth::user()->adresse }}</span></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Doctors Detail End Here -->
@endsection
@section('autreScript')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
    <script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
    <script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript"></script>
@endsection
