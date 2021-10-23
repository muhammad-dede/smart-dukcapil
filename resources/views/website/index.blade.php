@extends('layouts.website.template')

@section('content')
    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3>LAYANAN</h3>
                <h1>LAYANAN ONLINE DINAS DUKCAPIL CILEGON.</h1>
            </header>
            <div class="row justify-content-center">
                @foreach ($data_layanan as $layanan)
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box h-75">
                            <div class="icon" style="background: #fceef3;"><i class="{{ $layanan->icon }}"
                                    style="color: {{ $layanan->color }};"></i></div>
                            <h4 class="title text-muted"><a href="{{ url('login') }}">{{ $layanan->layanan }}</a></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="counts">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="fa fa-people-arrows" style="color: #20b38e;"></i>
                        <span data-toggle="counter-up">{{ $total }}</span>
                        <p>Total Pelaporan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="fa fa-file-download" style="color: #c042ff;"></i>
                        <span data-toggle="counter-up">{{ $diproses }}</span>
                        <p>Dalam Proses</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="fa bi-file-earmark-x" style="color: #46d1ff;"></i>
                        <span data-toggle="counter-up">{{ $ditolak }}</span>
                        <p>Ditolak</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="fa fa-file-archive" style="color: #ffb459;"></i>
                        <span data-toggle="counter-up">{{ $diterima }}</span>
                        <p>Selesai</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="intro">
                        <h1>CARA MENGAJUKAN PERMOHONAN ONLINE DISDUKCAPIL KOTA CILEGON</h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('') }}images/petunjuk/1.png" alt="alternative">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Langkah 1</div>
                        <h1>Lakukan Pendaftaran Akun sebelum menggunakan layanan</h1>
                        <p>Pendaftaran akun hanya diperuntukan untuk NIK yang terdaftar pada Disdukcapil Kota
                            Cilegon.<br /> Silakan login menggunakan akun yang sudah didaftarkan sebelumnya, apabila
                            pemohon belum
                            mempunyai akun silakan melakukan pendaftaran terlebih dahulu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Langkah 2</div>
                        <h1>Pilih Layanan yang akan diajukan</h1>
                        <p>Setelah melakukan pendaftaran dan login pemohon dapat mengajukan layanan yang tersedia
                            pada smartdukcapil Kota Cilegon</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('') }}images/petunjuk/2.png" alt="alternative">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('') }}images/petunjuk/3.png"
                            alt="alternative">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Langkah 3</div>
                        <h1>Isi Form Pengajuan</h1>
                        <p>Setelah memilih layanan pemohon mengisi form pengajuan dengan benar dan dilengkapi dengan dokumen pendukung
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Langkah 4</div>
                        <h1>Verifikasi Admin Dukcapil</h1>
                        <p>Layanan atau form yang diajukan akan dilakukan verifikasi terlebih dahulu oleh admin dukcapil. <br /> dan selanjutnya pemohon akan diberitahukan
                            melalui email atau pesan yang terdapat pada akun smartdukcapil.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('') }}images/petunjuk/4.png"
                            alt="alternative">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="basic-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('') }}images/petunjuk/5.png"
                            alt="alternative">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Langkah 5</div>
                        <h1>Pemberitahuan Hasil Pengajuan Layanan</h1>
                        <p>Setelah Form pengajuan diverifikasi oleh admin dukcapil, pemohon akan mendapatkan notifikasi melalui aplikasi smartdukcapil atau email pemohon mengenai hasil layanan yang diajukan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="faq" class="faq" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h1>TANYA JAWAB.</h1>
            </header>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Apa itu Smart Dukcapil? <i
                                class="fa fa-arrow-down icon-show"></i><i class="fa fa-arrow-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p style="color: #fff;">
                                Smart Dukcapil adalah layanan pelaporan pencatatan sipil khusus penduduk cilegon
                                yang
                                dapat diakses dari mana saja.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Apa sih tujuan Smart Dukcapil? <i
                                class="fa fa-arrow-down icon-show"></i><i class="fa fa-arrow-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: #fff;">
                                Smart Dukcapil bertujuan untuk dapat memudahkan penduduk secara mandiri mengajukan
                                permohonan penerbitan
                                dokumen kependudukan dari mana saja tanpa harus datang ke Dinas Kependudukan dan
                                Pencatatan Sipil.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Siapa saja sih
                            yang dapat menggunakan
                            Smart Dukcapil?<i class="fa fa-arrow-down icon-show"></i><i
                                class="fa fa-arrow-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p style="color: #fff;">
                                Seluruh penduduk warga Cilegon.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>

@endsection
