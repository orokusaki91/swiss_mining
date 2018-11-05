<div id="about-us">
    <div class="line-through">
        <h3>Über uns</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <p><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</b></p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-md-6 wow slideInLeft">
                <p><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</b></p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <!-- Owl carousel start -->
        <div class="owl-carousel owl-theme">
            @for($i=1; $i<=10; $i++)
                <div class="item">
                    <img src="{{ asset('img/about-us/item-1.jpg') }}" alt="img/about-us/item-1.jpg" />
                </div>
            @endfor
        </div>
    </div>
    <!-- Owl carousel end -->
    <!-- Mission - Vision start -->
    <div id="mission-vision">
        <h4>Mission - Vision</h4>
        <div class="background">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow slideInUp">
                            <img src="{{ asset('img/mission.png') }}" alt="img/mission.jpg" />
                        </div>
                        <div class="col-md-6 wow slideInUp">
                            <img src="{{ asset('img/vision.png') }}" alt="img/vision.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission - Vision end -->
    <!-- Roadmap start -->
    <div id="road-map">
        <h4>Roadmap</h4>
        <div class="road-map">
            <div class="container-fluid">
                <img src="{{ asset('img/roadmap.png') }}" alt="img/roadmap.png" />
            </div>
        </div>
    </div>
    <!-- Roadmap end -->
    <!-- Team start -->
    <div id="team">
        <div class="container">
            <h4>Team</h4>
            <div class="row align-items-md-center">
                @for($i=1; $i<=8; $i++)
                    <div class="col-md-3">
                        <div class="item wow slideInUp">
                            <img src="{{ asset('img/profile.png') }}" alt="img/profile.png" />
                            <div class="info">
                                <p class="name">Lorem Ipsum</p>
                                <p class="position">Lorem Ipsum</p>
                                <button class="btn">
                                    <i class="fab fa-linkedin-in"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Team end -->
</div>