<!-- Partners start -->
<div id="partners">
    <h2 class="wow slideInLeft">Partners</h2>
    <div class="partners">
        <div class="container">
            <div class="row align-items-md-center no-gutters">
                @foreach($partners as $partner)
                <div class="col-6 col-md-4 item-div">
                    <div class="item">
                        <a href="{{ $partner->website }}" target="_blank">
                            <img src="{{ asset($partner->image) }}" alt="img/partners/apple.png" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->