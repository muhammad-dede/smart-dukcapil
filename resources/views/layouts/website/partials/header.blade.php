<div class="mb-0" id="home">
    <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
        style="background-image: url({{ asset('') }}assets/media/svg/illustrations/landing.svg)">
        <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
            data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center flex-equal">
                        <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                            id="kt_landing_menu_toggle">
                            <span class="svg-icon svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="black" />
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </button>
                        <a href="{{ url('') }}">
                            <img alt="Logo" src="{{ asset('') }}logo.png" class="logo-default h-35px h-lg-40px" />
                            <img alt="Logo" src="{{ asset('') }}logo.png" class="logo-sticky h-30px h-lg-35px" />
                        </a>
                        <a href="{{ url('') }}">
                            <p class="title-sticky" style="font-size: 15px; font-weight: bold; padding: 10px 0 0 5px;">
                                Smart Dukcapil</p>
                            <p class="title-default" style="font-size: 15px; font-weight: bold; padding: 10px 0 0 5px;">
                                Smart Dukcapil</p>
                        </a>
                    </div>
                    <div class="d-lg-block" id="kt_header_nav_wrapper">
                        <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                            data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                            data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                            data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                            <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold"
                                id="kt_landing_menu">
                                <div class="menu-item">
                                    <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#services"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Layanan</a>
                                </div>
                                <div class="menu-item">
                                    <a class="tombol menu-link nav-link py-3 px-4 px-xxl-6" href="#details"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Petunjuk</a>
                                </div>
                                <div class="menu-item">
                                    <a class="tombol menu-link nav-link py-3 px-4 px-xxl-6" href="#faq"
                                        data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tanya
                                        Jawab</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-end ms-1" style="margin-right: 15px;">
                        <a href="{{ url('login') }}" class="btn explore-btn-primary">Login</a>
                    </div>
                    <div class="text-end ms-1">
                        <a href="{{ url('register') }}" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">

            <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">

                <h1 class="text-white fw-bolder fs-lg-3x mb-3">Layanan
                    Online
                </h1>
                <h1 class="text-white fw-bolder fs-lg-3x mb-5">Dinas Dukcapil Cilegon
                </h1>
                <p class="text-white fw-bolder mb-10">Buat Semuanya Lebih Mudah dengan Smart Dukcapil
                </p>
                <a href="#services" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"
                    class="btn btn-primary">Layanan Kami</a>
            </div>

        </div>
    </div>
    <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
        <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                fill="currentColor"></path>
        </svg>
    </div>

</div>
