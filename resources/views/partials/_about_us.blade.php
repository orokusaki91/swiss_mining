<!-- About us start -->
<div id="about-us">
    <h2 class="wow slideInLeft">Über uns</h2>
    <div class="about-us">
        <div class="container">
            <div class="about-us-div">
                <div class="info wow zoomIn">
                    <h4 class="header">{{ $aboutUs->header }}</h4>
                    <p class="description">{!! $aboutUs->header !!}</p>
                </div>
                <!-- Owl carousel start -->
                {{-- <div class="owl-carousel owl-theme">
                    @for($i=1; $i<=10; $i++)
                        <div class="item">
                            <img src="{{ asset('img/about-us/item-1.jpg') }}" alt="img/about-us/item-1.jpg" />
                        </div>
                    @endfor
                <!-- Owl carousel end --> --}}
            </div>
        </div>
    </div>
    <!-- Mission - Vision start -->
    <div id="mission-vision">
        <h3 class="wow slideInLeft">Mission - Vision</h3>
        <div class="mission-vision-div">
            <div class="container p-0">
                <div class="mission-vision">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-3 wow fadeInUp">
                                <div class="item">
                                    <div class="icon">
                                        <img class="icon-img" src="{{ asset('img/mission-vision/item-1.png') }}" />
                                        <img class="visible" src="{{ asset('img/mission-vision/item-1-visible.png') }}" />
                                        <img class="glow" src="{{ asset('img/mission-vision/item-1-glow.png')}}" />
                                    </div>
                                    <div class="info">
                                        <h2>01.</h2>
                                        <p class="big">Wir möchten die Blockchain Technologie massentauglich machen. Zum Beispiel Kryptowährungen wie Bitcoin, sind heute in der Handhabung noch viel zu kompliziert und noch nicht für Jeden geeignet. Wir sind an der Entwicklung von Software Lösungen beteiligt, um diesen Umstand zu automatisieren und den Gebrauch von Kryptowährungen zu vereinfachen.
                                        </p>
                                        <!--
                                        <p class="small">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        </p>
-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 wow fadeInUp" data-wow-delay=".1s">
                                <div class="item two">
                                    <div class="icon">
                                        <img class="icon-img" src="{{ asset('img/mission-vision/item-2.png') }}" />
                                        <img class="visible" src="{{ asset('img/mission-vision/item-2-visible.png') }}" />
                                        <img class="glow" src="{{ asset('img/mission-vision/item-2-glow.png') }}" />
                                    </div>
                                    <div class="info">
                                        <h2>02.</h2>
                                        <p class="big">Künstliche Intelligenz auch KI genannt, (engl. AI = Artificial Intelligence) ist ein Themawelches uns alle, jeden Tag, bereits begleitet und in Zukunft noch viel mehr begegnen wird. Darum beschäftigt sich die Swissmining auch mit der Bereitstellung von Speicherkapazität und Rechenleistung für künstliche Intelligenz so genanntes Datamining. Swissmining betreibt bereits heute, die grösste Miningfarm in Riga, Lettland.
                                        </p>
                                        <!--
                                        <p class="small">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        </p>
-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 wow fadeInUp" data-wow-delay=".2s">
                                <div class="item three">
                                    <div class="icon">
                                        <img class="icon-img" src="{{ asset('img/mission-vision/item-3.png') }}" />
                                        <img class="visible" src="{{ asset('img/mission-vision/item-3-visible.png') }}" />
                                        <img class="glow" src="{{ asset('img/mission-vision/item-3-glow.png') }}" />
                                    </div>
                                    <div class="info">
                                        <h2>03.</h2>
                                        <p class="big">Swissmining bietet abgesicherte Investments durch AAA Staatsgarantien. Jedes Investment bei der Swissmining ist somit zu 100% gegen Verlust abgesichert.
                                        </p>
                                        <!--
                                        <p class="small">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        </p>
-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 wow fadeInUp" data-wow-delay=".3s">
                                <div class="item four">
                                    <div class="icon">
                                        <img class="icon-img" src="{{ asset('img/mission-vision/item-4.png') }}" />
                                        <img class="visible" src="{{ asset('img/mission-vision/item-4-visible.png') }}" />
                                        <img class="glow" src="{{ asset('img/mission-vision/item-4-glow.png') }}" />
                                    </div>
                                    <div class="info">
                                        <h2>04.</h2>
                                        <p class="big">Wir bieten gesicherte Anlagen mit guterRenditemöglichkeit durch Mining und Arbitrage-Trading, basierend auf unserem eigenen Algorithmus. Arbitrage bedeutet, wenn die Software eine bestimmte Kryptowährung an einer Krypto-Börse kauft und sie gleichzeitig an einer anderen Börse zu einem höheren Preis verkauft. Dieser Prozess wurde von unseren Software-Entwicklern vollständig automatisiert.
                                        </p>
                                        <!--
                                        <p class="small">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        </p>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission - Vision end -->
    <!-- Roadmap start -->
    <div id="roadmap">
        <h3 class="wow slideInLeft" data-wow-delay="1s">Roadmap</h3>
        <div class="roadmap">
            <!-- Particles-roadmap start -->
            <div id="particles-roadmap" class="particles"></div>
            <!-- Particles-roadmap end -->
            <img class="roadmap-image" src="{{ asset('img/roadmap/roadmap.png') }}" alt="img/roadmap/roadmap.png" />
        </div>
    </div>
    <!-- Roadmap end -->
    <!-- Roadmap-controls start -->
    <div id="roadmap-controls" class="d-md-none">
        <div class="container-fluid">
            <div class="text-center">
                <img class="scroll-icon" src="{{ asset('img/roadmap/scroll.png') }}" alt="img/roadmap/scroll.png" />
            </div>
            <div class="row no-gutters">
                <div class="col-6 text-right">
                    <button class="btn btn-left" disabled>
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="col-6 text-left">
                    <button class="btn btn-right">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Roadmap-controls end -->
    <!-- Team start -->
    <div id="team">
        <h3 class="wow slideInLeft">Team</h3>
        <div class="team">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        @for($i = 0; $i < 6; $i++)
                        <div class="col-md-6">
                            <div class="box wow zoomIn wow zoomIn">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 mb-2 mb-md-0">
                                        <div class="item">
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset('img/team/profile.png') }}" alt="img/team/profile.png" />
                                                </div>
                                                <button class="btn">
                                                    <img src="{{ asset('img/team/linkedin.png') }}" class="linkedin" alt="img/team/linkedin.png" />
                                                </button>
                                            </div>
                                            <div class="info">
                                                <p class="name">Lorem Ipsum</p>
                                                <p class="position">Lorem Ipsum</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-8">
                                        <p class="description">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team end -->
</div>
<!-- About us end -->