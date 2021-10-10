<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>@yield('title') | {{ config('app.name') }}</title>
    <!-- Favicons -->
    <link href="{{ asset('') }}/logo.png" rel="icon">
    <link href="{{ asset('') }}/logo.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('') }}_web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('') }}_web/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('') }}_web/assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="{{ asset('') }}_web/assets/css/animated.css">
    <link rel="stylesheet" href="{{ asset('') }}_web/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('') }}css/styles.css">
    @stack('styles')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @include('website._layouts.partials.header')

    @yield('content')

    @include('website._layouts.partials.footer')


    <!-- Scripts -->
    <script src="{{ asset('') }}_web/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('') }}_web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}_web/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('') }}_web/assets/js/animation.js"></script>
    <script src="{{ asset('') }}_web/assets/js/imagesloaded.js"></script>
    <script src="{{ asset('') }}_web/assets/js/custom.js"></script>
    @stack('scripts')
</body>

</html>
