@extends('website._layouts.template')

@section('title', 'Daftar | ')

@push('styles')
<style>
    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 20px
    }

    .card2 {
        margin: 10px 40px
    }

    .image {
        margin-top: 30px;
        width: 560px;
    }

    .border-line {
        border-right: 1px solid #EEEEEE
    }

    .text-sm {
        font-size: 14px !important
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    a {
        color: inherit;
        cursor: pointer
    }

    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px
    }

    .btn-blue:hover {
        background-color: rgb(150, 153, 255);
        cursor: pointer
    }

    @media screen and (max-width: 991px) {
        .border-line {
            border-right: none
        }

        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px
        }

        .image {
            width: 330px;
        }

    }
</style>

@endpush

@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Daftar</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <div class="section-title-layanan" data-aos="fade-down">
                <h2>Daftar</h2>
                <p>Daftar Akun</p>
            </div>
            <div class="row content">
                <div class="container-fluid" data-aos="fade-down">
                    <div class="card card0 border-0">
                        <div class="row d-flex">
                            <div class="col-lg-6">
                                <div class="card1 pb-5">
                                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                            src="http://dukcapil.test/_web/assets/img/details-3.png" class="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card2 card border-0 px-4 py-5">
                                    <form id="form-daftar" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <h3 class="mb-0 mr-4 mt-2 mb-4">Daftar</h3>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">NIK</h6>
                                            </label>
                                            <input type="text" name="nik" id="nik" placeholder="Masukan NIK"
                                                autocomplete="off">
                                            <small class="nik_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">No KK</h6>
                                            </label>
                                            <input type="text" name="no_kk" id="no_kk" placeholder="Masukan No KK"
                                                autocomplete="off">
                                            <small class="no_kk_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Nama Lengkap</h6>
                                            </label>
                                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                placeholder="Masukan Nama lengkap" autocomplete="off">
                                            <small class="nama_lengkap_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Tempat Lahir</h6>
                                            </label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                placeholder="Masukan Tempat Lahir" autocomplete="off">
                                            <small class="tempat_lahir_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Tanggal Lahir</h6>
                                            </label>
                                            <input type="date" name="tgl_lahir" id="tgl_lahir"
                                                placeholder="Masukan Tanggal Lahir" autocomplete="off">
                                            <small class="tgl_lahir_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Nama Ibu</h6>
                                            </label>
                                            <input type="text" name="nama_ibu" id="nama_ibu"
                                                placeholder="Masukan Nama Ibu" autocomplete="off">
                                            <small class="nama_ibu_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">No Telp</h6>
                                            </label>
                                            <input type="text" name="telp" id="telp" placeholder="Masukan No Telp Aktif"
                                                autocomplete="off">
                                            <small class="telp_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Username &nbsp; <small
                                                        class="text-info"><em>(Digunakan untuk login
                                                            aplikasi)</em></small></h6>
                                            </label>
                                            <input type="text" name="username" id="username"
                                                placeholder="Masukan Username" autocomplete="off">
                                            <small class="username_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Email &nbsp; <small
                                                        class="text-info"><em>(Digunakan
                                                            untuk login
                                                            aplikasi)</em></small></h6>
                                            </label>
                                            <input type="text" name="email" id="email" placeholder="Masukan Email Aktif"
                                                autocomplete="off">
                                            <small class="email_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Password</h6>
                                            </label>
                                            <input type="password" name="password" id="password" placeholder="********">
                                            <small class="password_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Ulangi Password</h6>
                                            </label>
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" placeholder="********">
                                            <small class="password_confirmation_error text-danger"
                                                id="error-text"></small>
                                        </div>
                                        <div class="row mb-3 px-3">
                                            <button type="button" id="btn-daftar"
                                                class="btn btn-blue text-center">Daftar</button>
                                        </div>
                                        <div class="row mb-4 px-3">
                                            <small class="font-weight-bold">Sudah Punya Akun?
                                                <a class="text-danger" id="error-text"
                                                    href="{{ url('login') }}">Login</a>
                                            </small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    var base_url = {!! json_encode(url('/')) !!};
</script>
<script src="{{ asset('') }}js/auth/register.js"></script>
@endpush
