@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        Detail Pengajuan
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url()->previous() }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            @if ($pengajuan->layanan->url == 'kelahiran' && $pengajuan->id_layanan == 1)
                @include('app.layanan.show.kelahiran')
            @elseif ($pengajuan->layanan->url == 'lahir-mati' && $pengajuan->id_layanan == 2)
                @include('app.layanan.show.lahir-mati')
            @elseif ($pengajuan->layanan->url == 'perkawinan' && $pengajuan->id_layanan == 3)
                @include('app.layanan.show.perkawinan')
            @else
                @include('app.layanan.show.404')
            @endif
        </div>
    </div>

@endsection
