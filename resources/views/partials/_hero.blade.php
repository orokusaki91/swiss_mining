<!-- mobile start -->
<div id="mobile" class="d-md-none">
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
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">
                        Über<span>Uns</span>
                    </a>
                    <button class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#dropdown-about-us" aria-expanded="false" aria-controls="dropdown-about-us">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </li>
                <li id="dropdown-about-us" class="nav-item collapse">
                    <a href="#mission-vision" class="nav-link">Mission<span>Vision</span></a>
                    <a href="#roadmap" class="nav-link">Roadmap</a>
                    <a href="#team" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">
                        Dienstleistungen
                    </a>
                    <button class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#dropdown-services" aria-expanded="false" aria-controls="dropdown-services">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </li>
                <li id="dropdown-services" class="nav-item collapse">
                    <a href="#solutions" class="nav-link">Swissmining<span>Solutions</span></a>
                    <a href="#token" class="nav-link">Swiss<span>Turbo</span><span>Token</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">
                        Partners
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Kontakt
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
<header id="header" class="fixed-top d-none d-md-block">
    <div class="container-fluid">
        <!-- Navbar start -->
        <div id="navbar">
            <div class="row align-items-md-center">
                <div class="col-md-2 col-lg-4">
                    <div id="logo">
                        <a href="#home">
                            <img src="{{ asset('img/logo/swiss-mining.png') }}" class="logo" alt="img/logo/swiss-mining.png" />
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-lg-8">
                    <nav id="nav-bar" class="navbar float-md-right pr-md-0">
                        <ul id="nav" class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">Über uns</a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a href="#mission-vision" class="nav-link">Mission<span class="divider">-</span>Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#roadmap" class="nav-link">Roadmap</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#team" class="nav-link">Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Dienstleistungen</a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a href="#solutions" class="nav-link">Swissmining Solutions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#token" class="nav-link">Swiss Turbo Token</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#partners">Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontakt</a>
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