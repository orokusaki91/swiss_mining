<!-- Contact start -->
<div id="contact">
    <h2 class="wow slideInLeft">{{ __('translate.contact') }}</h2>
    <div class="contact">
        <!-- Particles-contact start -->
        <div id="particles-contact" class="particles"></div>
        <!-- Particles-contact end -->
        <div class="container">
            <div class="wrapper">
                <div class="row wow slideInLeft">
                    <div class="col-md-6">
                        <div class="info">
                            <p class="key">Name:</p>
                            <p class="value">Rep. Office Swissmining Ltd.</p>
                        </div>
                        <div class="info">
                            <p class="key">Adresse:</p>
                            <p class="value">
                                Web Gates GmbH<br />
                                Frenkendörferstrasse 27<br />
                                CH-4410 Liestal<br />
                                Switzerland<br />
                                +41 61 923 08 08
                            </p>
                        </div>
                        <div class="info">
                            <p class="key">Email:</p>
                            <p class="value"><a href="mailto:info@swissmining.io">info@swissmining.io</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contactForm">
                            <div class="form-group">
                                <label>{{ __('translate.your-name') }} <span>*</span></label>
                                <input type="text" class="form-control" name="name" />
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('translate.your-email') }} <span>*</span></label>
                                <input type="email" class="form-control" name="email" />
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('translate.subject') }} </label>
                                <input type="text" class="form-control" name="subject" />
                                <span></span>
                            </div>
                            <div class="form-group">
                                <label>{{ __('translate.your-message') }}</label>
                                <textarea class="form-control" rows="5" name="message"></textarea>
                                <span></span>
                            </div>
                            {!! csrf_field() !!}
                            <button type="submit" class="btn">{{ __('translate.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact end -->