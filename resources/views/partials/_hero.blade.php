<!-- mobile start -->
<div id="mobile" class="d-lg-none">
    <!-- scroll-progress start -->
    <div class="scroll-progress">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
    <!-- scroll-progress end -->
    <!-- Top menu start -->
    <div id="top-menu">
        <!-- Sidenav start -->
        <div id="sidenav" class="hamburger hamburger--spin">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
        <!-- Sidenav end -->
    </div>
    <!-- Top menu end -->
    <!-- mySidenav start -->
    <div id="mySidenav">
        <div class="navbar-logo">
            <img src="{{ asset('img/logo/swiss-mining.png') }}" alt="img/logo/swiss-mining.png" />
        </div>
        <nav id="navbar">
            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        {{ __('translate.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">
                        {{ __('translate.about-us') }}
                    </a>
                    <button class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#dropdown-about-us" aria-expanded="false" aria-controls="dropdown-about-us">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </li>
                <li id="dropdown-about-us" class="nav-item collapse">
                    <a href="#mission-vision" class="nav-link">{{ __('translate.mission-vision') }}</a>
                    <a href="#roadmap" class="nav-link">{{ __('translate.roadmap') }}</a>
                    <a href="#team" class="nav-link">{{ __('translate.team') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">
                        {{ __('translate.services') }}
                    </a>
                    <button class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#dropdown-services" aria-expanded="false" aria-controls="dropdown-services">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </li>
                <li id="dropdown-services" class="nav-item collapse">
                    <a href="#solutions" class="nav-link">{{ __('translate.swissmining-solutions') }}</a>
                    <a href="#token" class="nav-link">{{ __('translate.swiss-turbo-token') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">
                        {{ __('translate.partners') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        {{ __('translate.contact') }}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- mySidenav end -->
    <!-- Close nav start -->
    <div id="close-nav"></div>
    <!-- Close nav end -->
</div>
<!-- mobile end -->
<!-- Header start -->
<header id="header" class="fixed-top d-none d-lg-block">
    <div class="container-fluid">
        <!-- Navbar start -->
        <div id="navbar">
            <div class="row align-items-md-center">
                <div class="col-lg-3">
                    <div id="logo">
                        <a href="#home">
                            <img src="{{ asset('img/logo/swiss-mining.png') }}" class="logo" alt="img/logo/swiss-mining.png" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav id="nav-bar" class="navbar float-md-right pr-md-0">
                        <ul id="nav" class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">{{ __('translate.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">{{ __('translate.about-us') }}</a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a href="#mission-vision" class="nav-link">{{ __('translate.mission-vision') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#roadmap" class="nav-link">{{ __('translate.roadmap') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#team" class="nav-link">{{ __('translate.team') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">{{ __('translate.services') }}</a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a href="#solutions" class="nav-link">{{ __('translate.swissmining-solutions') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#token" class="nav-link">{{ __('translate.swiss-turbo-token') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#partners">{{ __('translate.partners') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">{{ __('translate.contact') }}</a>
                            </li>
                        </ul>
                        <ul id="language">
                            <li class="nav-item language">
                                <a class="nav-link text-uppercase lang" href="javascript:void(0)">
                                    {{ config()->get('app.locale') }}
                                    <span class="flag-icon flag-icon-{{ config()->get('app.locale') == 'en' ? 'gb' : config()->get('app.locale') }}"></span>
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="dropdown">
                                    <li class="nav-item {{ config()->get('app.locale') == 'de' ? 'active' : '' }}">
                                        <a href="{{ route('change-lang', 'de') }}" class="nav-link">De</a>
                                        <span class="flag-icon flag-icon-de"></span>
                                    </li>
                                    <li class="nav-item {{ config()->get('app.locale') == 'en' ? 'active' : '' }}">
                                        <a href="{{ route('change-lang', 'en') }}" class="nav-link">En</a>
                                        <span class="flag-icon flag-icon-gb"></span>
                                    </li>
                                    <li class="nav-item {{ config()->get('app.locale') == 'it' ? 'active' : '' }}">
                                        <a href="{{ route('change-lang', 'it') }}" class="nav-link">It</a>
                                        <span class="flag-icon flag-icon-it"></span>
                                    </li>
                                    <li class="nav-item {{ config()->get('app.locale') == 'fr' ? 'active' : '' }}">
                                        <a href="{{ route('change-lang', 'fr') }}" class="nav-link">Fr</a>
                                        <span class="flag-icon flag-icon-fr"></span>
                                    </li>
                                    <li class="nav-item {{ config()->get('app.locale') == 'es' ? 'active' : '' }}">
                                        <a href="{{ route('change-lang', 'es') }}" class="nav-link">Es</a>
                                        <span class="flag-icon flag-icon-es"></span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar end -->
    </div>
</header>
<!-- Header end -->