<!-- Services start -->
<div id="services">
    <h2 class="wow slideInLeft">{{ __('translate.services') }}</h2>
    <div class="container">
        <p class="info wow slideInUp">
            {!! $service->{'body_' . $language} !!}
        </p>
    </div>
    <div id="solutions" class="services">
        <div class="wow slideInLeft">
            <img src="{{ asset('img/services/bitcoin.png') }}" class="bitcoin" alt="img/services/bitcoin.png" />
            <h3>{!! __('translate.swissmining-solutions') !!}</h3>
        </div>
        <div class="solutions">
            <div class="container">
                <div class="solutions-div">
                    <div class="info wow zoomIn">
                        <h5>
                            <b>{{ $solution->{'header_' . $language} }}</b>
                        </h5>
                        <p>
                            {!! $solution->{'body_' . $language} !!}
                        </p>
                    </div>
                    <div class="services-button wow slideInLeft">
                        <img class="logo-btn" src="{{ asset('img/logo/logo-black.png') }}" alt="img/logo/logo-black.png" />
                        <div class="btn-div">
                            <a id="btn-solutions" href="https://www.swissmining.solutions/" class="btn" target="_blank">
                                {{ __('translate.read-more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="token" class="services">
        <div class="wow slideInLeft">
            <img src="{{ asset('img/services/bitcoin.png') }}" class="bitcoin" alt="img/services/bitcoin.png" />
            <h3>{!! __('translate.swiss-turbo-token') !!}</h3>
        </div>
        <div class="token">
            <div class="container">
                <div class="token-div">
                    <div class="info wow zoomIn">
                        <p>
							{!! $turboToken->{'body_' . $language} !!}
						</p>
                    </div>
                    <div class="services-button wow slideInLeft">
                        <img class="logo-btn" src="{{ asset('img/logo/swiss-turbo.png') }}" alt="img/logo/swiss-turbo.png" />
                        <div class="btn-div">
                            <a id="btn-token" href="https://swiss-turbo.com/" class="btn" target="_blank">
                                {{ __('translate.read-more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->