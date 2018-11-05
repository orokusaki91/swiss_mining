<div id="services">
    <div class="line-through">
        <h3>Dienstleistungen</h3>
    </div>
    <div class="container">
        <p class="info wow slideInLeft">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        @for($i=1; $i<=4; $i++)
            <div id="service{{ $i }}" class="service wow slideInUp">
                <i class="fab fa-bitcoin"></i>
                <h4>Service {{ $i }}</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        @endfor
        <div class="row align-items-md-center">
            <div class="col-md-6">
                <div id="solutions" class="wow slideInLeft">
                    <h4>Swissmining Solutions</h4>
                    <img src="{{ asset('img/logo/logo-black.png') }}" alt="img/logo/logo-black.png" />
                    <a id="btn-solution" href="https://www.swissmining.solutions/" class="btn" target="_blank">
                        Swissmining Solutions
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="token" class="wow slideInLeft">
                    <h4>Swiss Turbo Token</h4>
                    <img src="{{ asset('img/logo/swiss-turbo.png') }}" alt="img/logo/swiss-turbo.png" />
                    <a id="btn-token" href="https://swiss-turbo.com/" class="btn" target="_blank">
                        Swiss Turbo Token
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>