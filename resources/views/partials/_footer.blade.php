<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-md-center py-md-4">
                <div class="col-md-3 text-uppercase">
                    <a href="javascript:void(0)">Faq</a>
                </div>
                <div class="col-md-3 text-md-center">
                    <a href="javascript:void(0)">Impressum</a>
                </div>
                <div class="col-md-3 text-uppercase text-md-center">
                    <a href="javascript:void(0)">AGB'<span class="text-capitalize">s</span></a>
                </div>
                <div class="col-md-3 text-md-right">
                    <a href="javascript:void(0)">Sitemap</a>
                </div>
            </div>
        </div>
        <div class="subscribe">
            <div class="row">
                <div class="input-group col-md-4">
                    <input type="email" class="form-control" placeholder="Email eingeben" />
                    <div class="input-group-append">
                        <button class="btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-md-center py-md-4">
            <div class="col-md-6">
                <div class="copyright">
                    <p class="m-0">© 2018 <a href="http://www.webtory.rs/" target="_blank"><b>Webtory</b></a> - Alle Rechte Vorbehalten</p>
                </div>
            </div>
            <div class="col-md-6 text-md-right">
                <!-- Social start -->
                <div id="social-footer">
                    @for($i=1; $i<=4; $i++)
                        <div class="social">
                            <a href="javascript:void(0)" title="Facebook">
                                <img src="{{ asset('img/social/facebook.png') }}" alt="img/social/facebook.png" />
                            </a>
                        </div>
                    @endfor
                </div>
                <!-- Social end -->
            </div>
        </div>
    </div>
</footer>
@include('partials._scripts')
@yield('scripts')