@extends('templates.template',['titre'=>"Home dev"])

@section('content')
 <!-- Slider Area Start Here -->
<div class="slider-area slider-layout1 bg-light-primary slider-top-margin">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-1" class="slides">
            <img src="{{ asset('assets/img/slider/slide1-1.jpg') }}" alt="slider" title="#slider-direction-1" />
            <img src="{{ asset('assets/img/slider/slide1-2.jpg') }}" alt="slider" title="#slider-direction-2" />
            <img src="{{ asset('assets/img/slider/slide1-3.jpg') }}" alt="slider" title="#slider-direction-3" />
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text padding-right">We Take Care Of Your Healthy Health</div>
                        <p class="slider-paragraph padding-right">Mimply dummy text of the printing typesetting
                            ipsum dolor onsecte dipiscing.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="item-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text padding-right">We Take Care Of Your Healthy Health</div>
                        <p class="slider-paragraph padding-right">Mimply dummy text of the printing typesetting
                            ipsum dolor onsecte
                            dipiscing.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="item-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-3">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text padding-right">We Take Care Of Your Healthy Health</div>
                        <p class="slider-paragraph padding-right">Mimply dummy text of the printing typesetting
                            ipsum dolor onsecte
                            dipiscing.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="item-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End Here -->
<!-- About Area Start Here -->
<section class="about-wrap-layout1" data-bg-image="{{ asset('assets/img/slider/figure7.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="about-box-layout1 order-xl-2 col-xl-5 col-12">
                <div class="item-content">
                    <h2 class="item-title">Bienvenue chez {{ config('app.name') }} . Central Hospital</h2>
                    <div class="sub-title">Hospital imply dummy text of the printing and type setng industry
                        been
                        the industry.
                    </div>
                    <p>Mtandard dummy texr since when an unknown printer took a galley.MediPoint Lorem ipsum
                        dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam.'s standard dummy texr
                        since when an unknown printer took a galley consetetur.</p>
                    <img src="{{ asset('assets/img/slider/sign1.png') }}" alt="sign" class="img-fluid">
                </div>
            </div>
            <div class="about-box-layout2 order-xl-3 col-xl-4 col-lg-7 col-12">
                <ul>
                    <li><a href="appointment.html"><i class="far fa-calendar-alt"></i>Prendre un rendez-vous</a></li>
                    <li><a href="doctors1.html"><i class="far fa-user"></i>Parlez au docteur</a></li>
                    <li><a href="appointment.html"><i class="fas fa-map-marker-alt"></i>Nous contacter</a></li>
                    <li><a href="appointment.html"><i class="fas fa-phone"></i>Service d'urgence</a></li>
                </ul>
            </div>
            <div class="about-box-layout2 order-xl-1 col-xl-3 col-lg-5 col-12">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/about1.png') }}" alt="about" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End Here -->
<!-- Departments Area Start Here -->
<section class="departments-wrap-layout2 bg-light-secondary100">
    <img class="left-img img-fluid" src="{{ asset('assets/img/slider/figure8.png') }}" alt="figure">
    <div class="container">
        <div class="text-left section-heading heading-dark heading-layout1">
            <h2>Nos services</h2>
            <p>Services dédiés</p>
            <div id="owl-nav1" class="owl-nav-layout1">
                <span class="rt-prev">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="rt-next">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <label hidden>{{ $i=1 }}</label>
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="20"
            data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav1" data-smart-speed="2000"
            data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
            data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
            data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false"
            data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
            data-r-extra-large-dots="false">
   
            @forelse ($service as $s)
            <div class="departments-box-layout2">
                <span class="departments-sl">0{{ $i++ }}</span>
                <div class="item-icon">
                    @switch($s->nom)
                        @case("ProxyChat")
                        <i>
                            <img src="{{ asset('assets/img/png/017-comment.png') }}" style="margin-bottom: -10px">
                        </i>
                            @break
                        @case("ProxyChem")
                        <i class="flaticon-pills"></i>
                            @break
                        @case("ProxyFamily")
                        <i>
                            <img src="{{ asset('assets/img/png/018-family-insurance-2.png') }}" style="margin-bottom: -10px">
                        </i>
                        
                            @break
                    
                        @case("ProxyGency")
                        <i class="flaticon-ambulance"></i>
                            @break
                    
                    @endswitch
                   
                </div>
                {{-- <div class="item-icon"><i class="flaticon-medical"></i></div> --}}
                <h3 class="item-title"><a href="#">{{ $s->nom }} </a></h3>
                <p>
                   {{$s->description}}
                </p>
                <a class="item-btn" href="#">Vor plus<i class="fas fa-long-arrow-alt-right"></i></a>
            </div>  
            @empty
                
            @endforelse
           
        </div>
    </div>
</section>
<!-- Departments Area End Here -->
<!-- Featured Area Start Here -->
<section class="features-wrap-layout1">
    <div class="features-box-layout1 d-lg-flex bg-primary100">
        <div class="item-inner-wrapper">
            <div class="item-content d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="item-content-inner content-light">
                                <h2 class="item-title">Choose the best for your health</h2>
                                <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper
                                    turet suscipit lobortis.</p>
                                <ul class="list-item">
                                    <li>Free Consultation</li>
                                    <li>Quality Doctors</li>
                                    <li>Professional Experts</li>
                                    <li>Affordable Price</li>
                                    <li>24/7 Opened</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-inner-wrapper">
            <img src="{{ asset('assets/img/slider/figure8.jpg') }}" style="height: 600px;" class="img-responsive" alt="figure">
        </div>
    </div>
    <div class="features-box-layout1 d-lg-flex flex-lg-row-reverse">
        <div class="item-inner-wrapper">
            <div class="item-content d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="item-content-inner inner-title-dark">
                                <h2 class="item-title">We are the trusted experts things simple</h2>
                                <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation area ulm hedi
                                    corper turet suscipit lobortis nisl ut aliquip erat volutpat autem vel eum
                                    iriure dolor in hendrerit in vulputate.
                                </p>
                                <div class="skill-layout1">
                                    <div class="progress">
                                        <div class="lead">Efficency</div>
                                        <div style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s;"
                                            data-progress="95%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">Experience</div>
                                        <div style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;"
                                            data-progress="85%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="lead">Experience</div>
                                        <div style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s;"
                                            data-progress="99%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-inner-wrapper">
            <img src="{{ asset('assets/img/slider/team.jpg') }}" class="img-responsive" alt="figure">
        </div>
    </div>
</section>
<!-- Featured Area End Here -->
<!-- Brand Area Start Here -->
<section class="brand-wrap-layout1 bg-primary100">
    <div class="container">
        <div class="row">
            <div class="brand-box-layout1 col-xl-7 col-lg-6 col-md-12 col-12">
                <h2 class="item-title">We Are Certified Award Winning Hospital.</h2>
            </div>
            <div class="brand-box-layout2 col-xl-5 col-lg-6 col-md-12 col-12">
                <img src="{{ asset('assets/img/slider/brand-bg1.png') }}" alt="brand" class="img-fluid d-none d-lg-block">
                <ul>
                    <li>
                        <img src="{{ asset('assets/img/slider/brand1.png') }}" alt="brand" class="img-fluid">
                    </li>
                    <li>
                        <img src="{{ asset('assets/img/slider/brand2.png') }}" alt="brand" class="img-fluid">
                    </li>
                    <li>
                        <img src="{{ asset('assets/img/slider/brand3.png') }}" alt="brand" class="img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Brand Area End Here -->
<!-- Team Area Start Here -->
<section class="team-wrap-layout1 bg-light-secondary100">
    <img class="left-img img-fluid" src="{{ asset('assets/img/slider/figure4.png') }}" alt="figure">
    <img class="right-img img-fluid" src="{{ asset('assets/img/slider/figure5.png') }}" alt="figure">
    <div class="container">
        <div class="text-left section-heading heading-dark heading-layout1">
            <h2>Specialist Doctors</h2>
            <p>Experienced Doctor</p>
            <div id="owl-nav2" class="owl-nav-layout1">
                <span class="rt-prev">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="rt-next">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="30"
            data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav2" data-smart-speed="2000"
            data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
            data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
            data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false"
            data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
            data-r-extra-large-dots="false">
            <div class="team-box-layout2">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/dr1.jpg') }}" alt="Team1" class="img-fluid rounded-circle">
                    <ul class="item-icon">
                        <li>
                            <a href="single-doctor.html">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-content">
                    <h3 class="item-title">
                        <a href="single-doctor.html">Dr. Zinia Zara</a>
                    </h3>
                    <p>Gynaecology</p>
                </div>
                <div class="item-schedule">
                    <ul>
                        <li>Mon - Tues
                            <span>08.00 :17.00</span>
                        </li>
                        <li>Fri - Sat
                            <span>09.00 :12.00</span>
                        </li>
                        <li>Sun - Mon
                            <span>08.00 :17.00</span>
                        </li>
                    </ul>
                    <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                </div>
            </div>
            <div class="team-box-layout2">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/dr2.png') }}" alt="Team1" class="img-fluid rounded-circle">
                    <ul class="item-icon">
                        <li>
                            <a href="single-doctor.html">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-content">
                    <h3 class="item-title">
                        <a href="single-doctor.html">Dr. Nadim Kamal</a>
                    </h3>
                    <p>Orthopaedics</p>
                </div>
                <div class="item-schedule">
                    <ul>
                        <li>Mon - Tues
                            <span>08.00 :17.00</span>
                        </li>
                        <li>Fri - Sat
                            <span>09.00 :12.00</span>
                        </li>
                        <li>Sun - Mon
                            <span>08.00 :17.00</span>
                        </li>
                    </ul>
                    <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                </div>
            </div>
            <div class="team-box-layout2">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/dr3.png') }}" alt="Team1" class="img-fluid rounded-circle">
                    <ul class="item-icon">
                        <li>
                            <a href="single-doctor.html">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-content">
                    <h3 class="item-title">
                        <a href="single-doctor.html">Dr. Rihana Roy</a>
                    </h3>
                    <p>Lense Expert</p>
                </div>
                <div class="item-schedule">
                    <ul>
                        <li>Mon - Tues
                            <span>08.00 :17.00</span>
                        </li>
                        <li>Fri - Sat
                            <span>09.00 :12.00</span>
                        </li>
                        <li>Sun - Mon
                            <span>08.00 :17.00</span>
                        </li>
                    </ul>
                    <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                </div>
            </div>
            <div class="team-box-layout2">
                <div class="item-img">
                    <img src="{{ asset('assets/img/slider/team36.png') }}" alt="Team1" class="img-fluid rounded-circle">
                    <ul class="item-icon">
                        <li>
                            <a href="single-doctor.html">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item-content">
                    <h3 class="item-title">
                        <a href="single-doctor.html">Dr. Steven Roy</a>
                    </h3>
                    <p>Cardiology</p>
                </div>
                <div class="item-schedule">
                    <ul>
                        <li>Mon - Tues
                            <span>08.00 :17.00</span>
                        </li>
                        <li>Fri - Sat
                            <span>09.00 :12.00</span>
                        </li>
                        <li>Sun - Mon
                            <span>08.00 :17.00</span>
                        </li>
                    </ul>
                    <a href="single-doctor.html" class="item-btn">MAKE AN APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Area End Here -->
<!-- Schedule Area Start Here -->
<section class="class-schedule1">
    <div class="container">
        <div class="text-center section-heading heading-dark heading-layout1">
            <h2>Specialist Doctors</h2>
            <p>Experienced Doctor</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="class-schedule-wrap1">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="schedule-time-heading">Time</div>
                                    </th>
                                    <td>
                                        <div class="schedule-day-heading">Monday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Tuesday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Wednesday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Thursday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Friday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Saturday</div>
                                    </td>
                                    <td>
                                        <div class="schedule-day-heading">Sunday</div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">08.00am</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">10.00am</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">12.00pm</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">02.00pm</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">04.00pm</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="schedule-time-wrapper">06.00pm</div>
                                    </th>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">
                                            <div class="media">
                                                <div class="item-img">
                                                    <img src="img/team/team7.png" alt="team" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="title">Steven Smith</h3>
                                                    <div class="item-ctg">Contact Lens</div>
                                                    <a href="single-details.html" class="item-btn btn-fill size-xs radius-4">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <div class="item-ctg">Contact Lens</div>
                                            <div class="item-time">08.00am - 09.00am</div>
                                            <div class="item-team">Dr.Mike Hussy</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-item-wrapper">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Area End Here -->
 <!-- Banner Area Start Here -->
  <section class="banner-wrap-layout1 parallaxie" data-bg-image="{{ asset('assets/img/slider/slide4-3.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-8 col-md-10 col-12">
                <div class="banner-box-layout1">
                    <h2 class="item-title">For Emergency Cases</h2>
                    <h3 class="phone-number">1-800-555-0120</h3>
                    <p>Building a healthy environment that supports development for the community. Your
                        personal case manager will ensure that you receive the best possible care.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End Here -->
@include('parties.abonnements')
<!-- Call to Action Area Start Here -->
<section class="call-to-action-wrap-layout4">
    <div class="item-img">
        <img src="{{ asset('assets/img/slider/figure7.png') }}" alt="figure" class="img-fluid">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-8 col-md-8 col-12">
                <div class="call-to-action-box-layout4">
                    <h2 class="item-title">
                        Nous fournissons le plus haut niveau de soins et de services de satisfaction à nos patients.
                    </h2>
                    <div class="call-to-action-phone">
                        <a href="tel:+12344092888"><i class="fas fa-phone"></i>+243 827839232</a>
                    </div>
                    <div class="call-to-action-btn">
                        <a href="#" class="item-btn">Prendre un rendez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action End Here -->

@endsection

@section('autreScript')
    <!-- moyen de paiement -->
    <script src="{{ asset('cinetpay/paiement.js') }}"></script>   
@endsection