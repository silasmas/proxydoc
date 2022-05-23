@extends('templates.template')

@section("title","Mes abonnements")
@section("page2","Abonnements achéter")
@section("parent")
<li>
    <a href="{{ route('abonnement') }}">Abonnements</a>
</li> 
@endsection
@section('content')
 @include("parties.banner")
       <!-- Special Offer Start Here -->
  <section class="pricing-wrap-layout1 bg-light-accent100">
    <div class="container">
        <div class="text-center section-heading heading-dark heading-layout3">
            <h2>Vos abonnements acheter</h2>
            <p>profitez de nos services, et restez en bonne santé</p>
        </div>
        <div class="row gutters-20">
            @forelse ($mines as $a)          
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="pricing-box-layout1">
                    <h3>{{ $a->nom }}</h3>
                    <small>Date debut :{{ $a->date_debut }}</small><br>
                    <small>Date fin :{{ $a->date_fin }}</small><br>
                    <div class="pricing title-bar-primary6">
                        {{-- <span class="currency">{{ $a->monaie=="USD"?"$":"FC" }}</span> --}}
                        <span class="amount">{{ $a->duree }}</span>
                        <small>/ {{$a->temps }}</small>
                    </div>
                    <div class="box-content">
                        <ul>
                            @forelse ($a->service as $s)
                                
                            <li>{{ $s->nom }}</li>
                            @empty
                                
                            @endforelse
                            
                        </ul>
                        <a href="{{ route('createAbonnement',['id'=>$a->id])}}" class="item-btn">Voir en detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center">
                <h4 class="text-danger">
                    Aucun abonnement acheter jusqu'à présent
                </h4>
            </div>
            @endforelse
           
        </div>
    </div>
</section>
<!-- Special Offer End Here -->
       
@endsection