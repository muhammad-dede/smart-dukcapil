@extends('app._layouts.template')

@section('title', 'Layanan')

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

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

    </style>

@endpush

@section('content')
    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ url('beranda') }}">Beranda</a></li>
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
                                    <p>Kematian</p>
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
                                @include('app.forms.pembatalan-perceraian')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
