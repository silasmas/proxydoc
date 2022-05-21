   <!-- Header Area Start Here -->
   <header id="header_1">
    <div class="header-top-bar top-bar-border-bottom bg-light-primary100 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-12 header-contact-layout1">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>Call: 123 884400</li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>Medilink ltd, 59 Newyork City</li>
                        <li>
                            <i class="far fa-clock"></i>Mon - Fri: 9.00am - 11.00pm</li>
                    </ul>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <ul class="header-social-layout1">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-skype"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-area header-menu-layout1">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-1 col-md-1 logo-area-layout1">
                    <a href="index.html" class="temp-logo">
                        <img src="{{ asset('assets/logo/logo1.png') }}" alt="logo" height="70" width="70" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 possition-static">
                    <div class="template-main-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="active">
                                    <a href="{{ route('home') }}">Accueil</a>                                    
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Apropo</a>                                    
                                </li>                                        
                                <li>
                                    <a href="{{ route('services') }}">Nos services</a>                                   
                                </li>
                                <li>
                                    <a href="{{ route('docteur') }}">Nos docteurs</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="header-action-items-layout1">
                        <ul>
                            <li class="d-none d-xl-block">
                                <form id="top-search-form" class="header-search-dark">
                                    <input type="text" class="search-input" placeholder="Search...." required="">
                                    <button class="search-button">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </form>
                            </li>
                            @if (!Auth::guest())
                            <li class="">
                                <a class="action-items-primary-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                  Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="action-items-primary-btn">Connéxion<i class="fas fa-chevron-right"></i></a>
                            </li>
                            @endif
                            
                            <li>
                                <a href="{{ route('abonnement') }}" class="action-items-primary-btn">S'abonner<i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End Here -->
