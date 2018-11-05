<div id="contact">
    <div class="line-through">
        <h3>Kontakt</h3>
    </div>
    <div class="contact">
        <!-- Particles2 start -->
        <div id="particles-js2"></div>
        <!-- Particles2 end -->
        <div class="container">
            <div class="wrapper">
                <div class="row wow slideInLeft">
                    <div class="col-md-6">
                        <div class="info">
                            <p class="key">Name:</p>
                            <p class="value">Lorem Ipsum</p>
                        </div>
                        <div class="info">
                            <p class="key">Adresse:</p>
                            <p class="value">Lorem Ipsum</p>
                        </div>
                        <div class="info">
                            <p class="key">Email:</p>
                            <p class="value">Lorem Ipsum</p>
                        </div>
                        <div class="info">
                            <p class="key">Telefon:</p>
                            <p class="value">Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ url('ajax/contact') }}" method="post" id="contactForm">
                            <div class="form-group">
                                <label>Dein Name <span>*</span></label>
                                <input type="text" class="form-control" name="name" id="name" />
                                <span class="has-error"></span>
                            </div>
                            <div class="form-group">
                                <label>Deine Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" id="email" />
                                <span class="has-error"></span>
                            </div>
                            <div class="form-group">
                                <label>Gegenstand </label>
                                <input type="text" class="form-control" name="subject" id="subject" />
                                <span class="has-error"></span>
                            </div>
                            <div class="form-group">
                                <label>Deine Nachricht*</label>
                                <textarea class="form-control" rows="5" name="message" id="message" ></textarea>
                                <span class="has-error"></span>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" class="btn">Einreichen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>