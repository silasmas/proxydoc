@extends('templates.template',['titre'=>"Home dev"])

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{ asset('assets/img/slider/figure2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Nos services</h1>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Department Start Here -->
<section class="departments-wrap-layout5 bg-light-accent100">
    <div class="container">
        <div class="row gutters-20">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i>
                            <img src="{{ asset('assets/img/png/017-comment.png') }}" style="margin-bottom: 35px">
                        </i>
                        <h3 class="item-title"><a href="{{ route('detailAbonnement') }}">ProxyChat</a></h3>
                        <p>en cliquant sur ce service ou option, le client trouvera
                            la liste des médecins.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-pills"></i>
                        <h3 class="item-title"><a href="{{ route('detailAbonnement') }}">ProxyChem</a></h3>
                        <p>
                            Ce service vous permet de trouver des médicaments et être servi à domicile... 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i>
                            <img src="{{ asset('assets/img/png/018-family-insurance-2.png') }}" style="margin-bottom: 35px">
                        </i>
                        <h3 class="item-title"><a href="{{ route('detailAbonnement') }}">ProxyFamily</a></h3>
                        <p>
                            La famille est precieuse, ProxyDoc vous dispose par ce service des medecins de famille à domicile... 

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-ambulance"></i>
                        <h3 class="item-title"><a href="{{ route('detailAbonnement') }}">ProxyGency</a></h3>
                        <p>Ce service vous permet d'avoir notre service d'urgence 24h/7</p>
                        <p>Bientôt disponible</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-doctor-stethoscope"></i>
                        <h3 class="item-title"><a href="{{ route('detailAbonnement') }}">Primary Care</a></h3>
                        <p>There are many variations of of Lorem Ipsum available, but the majority have
                            suffered..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-eye"></i>
                        <h3 class="item-title"><a href="single-departments.html">Eye Care</a></h3>
                        <p>There are many variations of of Lorem Ipsum available, but the majority have
                            suffered..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4 float-shadow">
                    <div class="box-content">
                        <i class="flaticon-ambulance"></i>
                        <h3 class="item-title"><a href="single-departments.html">Emergency</a></h3>
                        <p>There are many variations of of Lorem Ipsum available, but the majority have
                            suffered..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-first-aid-kit"></i>
                        <h3 class="item-title"><a href="single-departments.html">Skilled Doctors</a></h3>
                        <p>There are many variations of of Lorem Ipsum available, but the majority have
                            suffered..</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="departments-box-layout4">
                    <div class="box-content">
                        <i class="flaticon-medal"></i>
                        <h3 class="item-title"><a href="single-departments.html">Certified Clinic</a></h3>
                        <p>There are many variations of of Lorem Ipsum available, but the majority have
                            suffered..</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Department Area End Here -->
@endsection