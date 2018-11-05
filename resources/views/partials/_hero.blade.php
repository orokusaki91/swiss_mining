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
        <div id="sidenav" class="hamburger hamburger--spin d-md-none" data-toggle="collapse" role="button" aria-expanded="false">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
        <!-- Sidenav end -->
    </div>
    <!-- Top menu end -->
    <!-- mySidenav start -->
    <div id="mySidenav">
        <div class="logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="img/logo/logo.png" />
        </div>
        <nav id="navbar">
            <ul>
                <li>
                    <a class="nav-link" href="#home">
                        Home
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#about-us">
                        Über<span>Uns</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#services">
                        Dienstleistungen
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#partner">
                        Partner
                    </a>
                </li>
                <li>
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
                <div class="col-md-2 col-lg-3">
                    <div id="logo">
                        <a href="#home">
                            <img src="{{ asset('img/logo/logo.png') }}" class="logo" alt="img/logo/logo.png" />
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-lg-9">
                    <nav id="nav-bar" class="navbar float-md-right pr-md-0">
                        <ul id="nav" class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us">Über uns</a>
                                <ul class="dropdown">
                                    <li class="nav-item">
                                        <a href="#mission-vision" class="nav-link">Mission<br />-<br />Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#road-map" class="nav-link">Roadmap</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#team" class="nav-link">Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Dienstleistungen</a>
                                <ul class="dropdown">
                                    @for($i=1; $i<=4; $i++)
                                        <li class="nav-item">
                                            <a href="#service{{ $i }}" class="nav-link">Service {{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#partner">Partner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Kontakt</a>
                            </li>
                        </ul>
                        <ul id="language">
                            <li class="nav-item language">
                                <a class="nav-link text-uppercase lang" href="javascript:void(0)"><i class="fas fa-angle-down"></i>De</a>
                                <ul class="dropdown">
                                    <li class="nav-item active">
                                        <a href="javascript:void(0)" class="nav-link">De</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link">En</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link">It</a>
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
<!-- Home start -->
<div id="home">
    <!-- Particles start -->
    <div id="particles-js"></div>
    <!-- Particles end -->
    <!-- Social start -->
    <div id="social-bar">
        @for($i=1; $i<=4; $i++)
            <div class="social">
                <a href="javascript:void(0)" title="Facebook">
                    <img src="{{ asset('img/social/facebook.png') }}" alt="img/social/facebook.png" />
                </a>
            </div>
        @endfor
    </div>
    <!-- Social end -->
    <!-- Owl carousel start -->
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h1 class="wow slideInUp" data-wow-delay="2s">Willkommen zu<span><b>swiss</b>mining</span></h1>
                </div>
                <div class="col-md-6">
                    <h1 class="wow slideInUp" data-wow-delay="2s">Willkommen zu<span><b>swiss</b>mining</span></h1>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h1>Willkommen zu<span><b>swiss</b>mining</span></h1>
                </div>
                <div class="col-md-6">
                    <h1>Willkommen zu<span><b>swiss</b>mining</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Owl carousel end -->
</div>
<!-- Home end -->
<!-- Home-div start -->
<div id="home-div"></div>