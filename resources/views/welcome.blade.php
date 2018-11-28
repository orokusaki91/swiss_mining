<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._header')
</head>

<body data-spy="scroll" data-target="#navbar">
    <div id="loader"></div>

    <div id="app">
        @include('partials._hero')

        <div id="content">
            @include('partials._home')
            @include('partials._about_us')
            @include('partials._services')
            @include('partials._partners')
            @include('partials._contact')
        </div>

        <div class="push-footer"></div>
        <a href="javascript:void(0)" id="back-to-top" title="Back to top">
            <img src="{{ asset('img/top.png') }}" alt="img/top.png" />
        </a>
    </div>

    @include('partials._footer')

    <script>
        $(function () {
            $('#contactForm').submit(function (e) {
                e.preventDefault();
                var form = $(this);
                var formData = form.serialize();
                var submitButton = form.find('button.btn');
                submitButton.attr('disabled', true);

                $.ajax({
                    url: 'ajax/contact',
                    data: formData,
                    method: 'post',
                    success: function (response) {
                        // empty all previous errors 
                        $('.has-error').removeClass('.has-error').text('');
                        var errors = response.errors;
                        if ($.isEmptyObject(errors)) {
                            location.reload();
                        } else {
                            submitButton.attr('disabled', false);
                            // print the errors
                            $.each(errors, function (key, val) {
                                var input = form.find('[name="'+ key +'"]');
                                input.next().addClass('has-error').text(val[0]);
                            });
                        }
                    },
                    errors: function() {
                        location.reload();
                    }
                });
            });

            @if(Session::has('success'))
            swal(
                'Erledigt!',
                '{{ Session::get('success') }}',
                'success'
                );
            @elseif(Session::has('error'))
            swal(
                'Fehler!',
                '{{ Session::get('error') }}',
                'error'
                );
            @endif
        });
    </script>
</body>
</html>
