@extends('website._layouts.template')

@section('title', 'Login | ')

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
        margin-top: 40px;
        width: 460px;
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
                    <li>Login</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <div class="section-title-layanan" data-aos="fade-down">
                <h2>Login</h2>
                <p>Login Akun</p>
            </div>
            <div class="row content">
                <div class="container-fluid" data-aos="fade-down">
                    @if (session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card card0 border-0">
                        <div class="row d-flex">
                            <div class="col-lg-6">
                                <div class="card1 pb-5">
                                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img
                                            src="{{ asset('') }}vector/Login-amico.svg" class="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="card2 card border-0 px-4 py-4">
                                    <form id="form-login" action="{{ url('login') }}" method="POST">
                                        @csrf
                                        <h3 class="mb-0 mr-4 mt-2 mb-4">Login</h3>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Username</h6>
                                            </label>
                                            <input type="text" name="username" id="username"
                                                placeholder="Masukan Username">
                                            <small class="username_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row px-3 mb-4">
                                            <label class="mb-1">
                                                <h6 class="mb-0 text-sm">Password</h6>
                                            </label>
                                            <input type="password" name="password" id="password" placeholder="********">
                                            <small class="password_error text-danger" id="error-text"></small>
                                        </div>
                                        <div class="row mb-3 px-3">
                                            <button id="btn-login" type="button"
                                                class="btn btn-blue text-center">Login</button>
                                        </div>
                                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Belum Mempunyai
                                                akun?
                                                <a class="text-danger" href="{{ url('register') }}">Daftar</a></small>
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
<script src="{{ asset('') }}js/auth/login.js"></script>
@endpush
