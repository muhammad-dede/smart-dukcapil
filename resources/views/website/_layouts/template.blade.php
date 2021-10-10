<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>@yield('title'){{ config('app.name') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('') }}logo.png" rel="icon">
    <link href="{{ asset('') }}logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}_web/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}_web/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}_web/assets/css/style.css" rel="stylesheet">
    @stack('styles')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('website._layouts.partials.header')
    <!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('website._layouts.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}_web/assets/vendor/jquery/jquery.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('') }}_web/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}_web/assets/js/main.js"></script>
    @stack('scripts')
</body>

</html>
