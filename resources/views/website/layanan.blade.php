@extends('website._layouts.template')

@section('title', 'Layanan | ')

@push('styles')
<style>
    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 20px
    }

    .card2 {
        margin: 10px 40px
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
                    <li>Layanan</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <div class="row content">
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="section-title-layanan">
                                <h2>Layanan</h2>
                                <p>{{ $layanan->layanan }}</p>
                            </div>
                            <h3>Apa saja yang harus disiapkan?</h3>
                            <ul>
                                <li><i class="bi bi-check"></i> Persyaratan 1
                                </li>
                                <li><i class="bi bi-check"></i> Persyaratan 2</li>
                                <li><i class="bi bi-check"></i> Persyaratan 3
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="card card0 border-0">
                                <div class="card2 card border-0">
                                    <form id="form-login" action="{{ url('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-0 mr-4 mt-3 mb-3">
                                            <h3>Login</h3>
                                            <small class="text-muted"><em>Silahkan masuk untuk mengajukan
                                                    permohonan kamu</em></small>
                                        </div>
                                        <div class="row px-3 mb-3">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Username</h6>
                                            </label>
                                            <input type="text" name="username" id="username"
                                                placeholder="Masukan Username Anda">
                                            <small class="username_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-3">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Password</h6>
                                            </label> <input type="password" name="password" id="password"
                                                placeholder="Masukan password">
                                            <small class="password_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row mb-3 px-3 mb-4">
                                            <button id="btn-login" type="button"
                                                class="btn btn-blue text-center">Login</button>
                                        </div>
                                        <div class="row mb-4 px-2">
                                            <small class="font-weight-bold">Belum mempunyai
                                                akun?
                                                <a class="text-danger" href="{{ url('register') }}">Buat Akun</a>
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
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    var base_url = {!! json_encode(url('/')) !!};
</script>
<script src="{{ asset('') }}js/auth/login.js"></script>
@endpush
