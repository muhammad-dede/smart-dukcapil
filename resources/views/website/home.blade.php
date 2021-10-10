@extends('website._layouts.template')

@section('title', '')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Layanan Online</h1>
                        <h1><span>Dinas Dukcapil Cilegon</span></h1>
                        <h2>Buat Semuanya Mudah Dengan Smart Dukcapil</h2>
                        <div class="text-center text-lg-start">
                            <a href="#layanan" class="btn-get-started scrollto">Layanan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('') }}vector/files.svg" class="img-fluid animated" alt="hero">
                </div>
            </div>
        </div>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Features Section ======= -->
        <section id="layanan" class="features">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Layanan</h2>
                    <p>Layanan Online Dinas Dukcapil Cilegon</p>
                </div>
                <div class="row" data-aos="fade-left">
                    @foreach ($data_layanan as $layanan)
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                <i class="{{ $layanan->icon }}" style="color: {{ $layanan->color }};"></i>
                                <h3 style="line-height: 22px;"><a
                                        href="{{ url('layanan') }}/{{ $layanan->url }}">{{ $layanan->layanan }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-arrow-down"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1444" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Total Pelaporan</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-cloud-arrow-down"></i>
                            <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dalam Proses</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-file-earmark-x"></i>
                            <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Ditolak</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-bookmark-check"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1343" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Selesai</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Details Section ======= -->
        <section id="petunjuk" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="{{ asset('') }}_web/assets/img/details-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5" data-aos="fade-up">
                        <h3>Cara Mengajukan Pelaporan Online Pencatatan Sipil Kota Cilegon</h3>
                        <p class="text-info">Mekanisme pengajuan permohonan penerbitan dokumen kependudukan melalui
                            Aplikasi Smart Dukcapil adalah sebagai berikut :</p>
                        <ol class="font-weight-bold">
                            <li>Pemohon melakukan login dengan menggunakan akun yang
                                telah didaftarkan sebelumnya.
                            </li>
                            <li>Pemohon mengisi form aplikasi dan dilengkapi dengan
                                scan/foto dokumen pendukung.</li>
                            <li>Setelah form diisi dengan benar dan telah dilengkapi
                                dokumen pendukung, pemohon dapat mengirim permohonan melalui Aplikasi.</li>
                            <li>Petugas di Dinas Kependudukan dan Pencatatan Sipil
                                memverifikasi dan memperoses permohonan serta menerbitkan dokumen kependudukan setelah
                                permohonan dinyatakan lengkap.</li>
                            <li>Pemohon dapat mengambil dokumen kependudukan setelah
                                mendapatkan pemberitahuan melalui email.</li>
                            <li>Pemohon menyerahkan berkas permohonan kepada Petugas
                                dan Petugas kemudian mencocokan dengan softcopy yang dikirimkan Pemohon melalui
                                Aplikasi. Setelah berkas dinyatakan cocok, maka Petugas menyerahkan Dokumen Kependudukan
                                kepada Pemohon.</li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Details Section -->

        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                    <p>Tanya Jawab</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Apa itu Smart Dukcapil? <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Smart Dukcapil adalah layanan pelaporan pencatatan sipil khusus penduduk cilegon yang
                                    dapat diakses dari mana saja.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Apa sih tujuan Smart Dukcapil? <i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Smart Dukcapil bertujuan untuk dapat memudahkan penduduk secara mandiri mengajukan
                                    permohonan penerbitan
                                    dokumen kependudukan dari mana saja tanpa harus datang ke Dinas Kependudukan dan
                                    Pencatatan Sipil.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Siapa saja sih yang dapat menggunakan
                                Smart Dukcapil? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Seluruh penduduk warga Cilegon.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section>

    </main>
    <!-- End #main -->

@endsection
