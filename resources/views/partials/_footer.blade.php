<!-- Footer start -->
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row no-guters pt-3">
                <div class="col-md-4 pb-3 pb-md-0">
                    {{-- <div class="text-uppercase faq">
                        <a href="javascript:void(0)">Faq</a>
                    </div> --}}
                    <div class="link">
                        <a href="{{ route('impressum') }}">Impressum</a>
                    </div>
                    {{-- <div class="link">
                        <a class="text-uppercase" href="javascript:void(0)">Agb'<span class="text-lowercase">s</span></a>
                    </div> --}}
                </div>
                <div class="col-md-4 pb-4 pb-md-0">
                    <h4>Newsletter</h4>
                    <div class="newsletter">
                        <form action="{{ route('newsletter') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <div class="newsletter-border">
                                    <input name="email" type="email" class="form-control" placeholder="{{ __('translate.enter-email') }}" required/>
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn">{{ __('translate.subscribe') }}</button>
                                </div>
                            </div>
                        </form>
                        {{ Session::has('email') ? Session::get('email') : '' }}
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <!-- Social start -->
                    <div id="social">
                        <div class="social">
                            <a href="javascript:void(0)" title="Facebook">
                                <img src="{{ asset('img/social/facebook.png') }}" alt="img/social/facebook.png" />
                            </a>
                        </div>
                        <div class="social">
                            <a href="javascript:void(0)" title="Telegram">
                                <img src="{{ asset('img/social/telegram.png') }}" alt="img/social/telegram.png" />
                            </a>
                        </div>
                        <div class="social">
                            <a href="javascript:void(0)" title="Reddit">
                                <img src="{{ asset('img/social/reddit.png') }}" alt="img/social/reddit.png" />
                            </a>
                        </div>
                        <div class="social">
                            <a href="javascript:void(0)" title="Bitcointalk">
                                <img src="{{ asset('img/social/bitcointalk.png') }}" alt="img/social/bitcointalk.png" />
                            </a>
                        </div>
                    </div>
                    <!-- Social end -->
                </div>
            </div>
            <div class="text-center py-3">
                <div class="copyright">
                    <p class="m-0">
                        © 2018 <a href="http://www.mpsoft.ch/" target="_blank"><b>MPSoft</b></a> - {{ __('translate.rights-reserved') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
@include('partials._scripts')
@yield('scripts')