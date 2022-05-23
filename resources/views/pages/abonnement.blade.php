@extends('templates.template',)

@section("title","Nos abonnement")
@section("page","Abonnement")

@section('content')
 <!-- Inne Page Banner Area Start Here -->
 <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{ asset('assets/img/slider/figure2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Liste de nos abonnements</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li>Abonnements</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
       @include('parties.abonnements')
        <!-- Call To Action Start Here -->
        <section class="call-to-action-wrap-layout1">
            <div class="container">
                <div class="row">
                    <div class="call-to-action-box-layout1 col-xl-6 col-lg-6 col-md-12 col-12">
                        <h2 class="item-title">Do You Need Any Medical Help?</h2>
                    </div>
                    <div class="call-to-action-box-layout1 col-xl-6 col-lg-6 col-md-12 col-12">
                        <h2 class="item-title">
                            <i class="fas fa-phone"></i>Please Call Now: +123 884400</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action End Here -->
@endsection