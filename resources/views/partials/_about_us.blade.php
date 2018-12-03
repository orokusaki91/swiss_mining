<!-- About us start -->
<div id="about-us">
    <h2 class="wow slideInLeft">Über uns</h2>
    <div class="about-us">
        <div class="container">
            <div class="about-us-div">
                <div class="info wow zoomIn">
                    <h4 class="header">{{ $aboutUs->{'header_' . config()->get('app.locale')} }}</h4>
                    <p class="description">{!! $aboutUs->{'body_' . config()->get('app.locale')} !!}</p>
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
                            <?php $num = 1; ?>
                            @foreach($missionVisions as $ms)
                            <div class="col-md-3 wow fadeInUp" data-wow-delay=".{{ $num }}s">
                                <div class="item">
                                    <div class="icon">
                                        <img class="icon-img" src="{{ asset('img/mission-vision/item-'. $num .'.png') }}" />
                                        <img class="visible" src="{{ asset('img/mission-vision/item-'. $num .'-visible.png') }}" />
                                        <img class="glow" src="{{ asset('img/mission-vision/item-'. $num .'-glow.png')}}" />
                                    </div>
                                    <div class="info">
                                        <h2>{{ $ms->name }}</h2>
                                        <p class="big">{!! $ms->{'body_' . $language} !!}</p>
                                        <!--
                                        <p class="small">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                        </p>
-->
                                    </div>
                                </div>
                            </div>
                            <?php $num++ ?>
                            @endforeach
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
                        @foreach($team as $member)
                        <div class="col-md-6">
                            <div class="box wow zoomIn wow zoomIn">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 mb-2 mb-md-0">
                                        <div class="item">
                                            <div class="profile">
                                                <div class="profile-img">
                                                    <img src="{{ asset("{$member->image}") }}" alt="img/team/profile.png" />
                                                </div>
                                                <button class="btn">
                                                    <img src="{{ asset('img/team/linkedin.png') }}" class="linkedin" alt="img/team/linkedin.png" />
                                                </button>
                                            </div>
                                            <div class="info">
                                                <p class="name">{{ $member->name }}</p>
                                                <a href="{{ $member->linkedin }}" class="position" target="_blank">LinkedIn Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-8">
                                        <p class="description">
                                            {{ $member->about }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team end -->
</div>
<!-- About us end -->