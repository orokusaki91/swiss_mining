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
            @include('partials._about_us')
            @include('partials._services')
            @include('partials._partners')
            @include('partials._contact')
        </div>

        <div class="push-footer"></div>
        <a href="javascript:void(0)" id="back-to-top" title="Back to top">
            <img src="img/top.png" alt="img/top.png" />
        </a>
    </div>

    @include('partials._footer')
</body>

</html>
