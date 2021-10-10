<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="{{ url('') }}">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <link rel="canonical" href="{{ url('') }}" />
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('') }}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/website.css">
    @stack('styles')
</head>


<body id="kt_body" style="background-image: url({{ asset('') }}assets/media/patterns/header-bg.jpg)"
    data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <div class="d-flex flex-column flex-root">
        @include('layouts.website.partials.header')
        @yield('content')
        @include('layouts.website.partials.footer')


        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                        fill="black" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="black" />
                </svg>
            </span>
        </div>
    </div>
    <script src="{{ asset('') }}assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/scripts.bundle.js"></script>
    <script src="{{ asset('') }}assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="{{ asset('') }}assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <script src="{{ asset('') }}assets/js/custom/landing.js"></script>
    <script src="{{ asset('') }}js/jquery.js"></script>
    @stack('scripts')
</body>

</html>
