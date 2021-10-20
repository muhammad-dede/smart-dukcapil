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
            @elseif ($pengajuan->layanan->url == 'pembatalan-perkawinan' && $pengajuan->id_layanan == 4)
                @include('app.layanan.show.pembatalan-perkawinan')
            @elseif ($pengajuan->layanan->url == 'perceraian' && $pengajuan->id_layanan == 5)
                @include('app.layanan.show.perceraian')
            @elseif ($pengajuan->layanan->url == 'pembatalan-perceraian' && $pengajuan->id_layanan == 6)
                @include('app.layanan.show.pembatalan-perceraian')
            @elseif ($pengajuan->layanan->url == 'kematian' && $pengajuan->id_layanan == 7)
                @include('app.layanan.show.kematian')
            @elseif ($pengajuan->layanan->url == 'pengangkatan-anak' && $pengajuan->id_layanan == 8)
                @include('app.layanan.show.pengangkatan-anak')
            @elseif ($pengajuan->layanan->url == 'pengakuan-anak' && $pengajuan->id_layanan == 9)
                @include('app.layanan.show.pengakuan-anak')
            @elseif ($pengajuan->layanan->url == 'pengesahan-anak' && $pengajuan->id_layanan == 10)
                @include('app.layanan.show.pengesahan-anak')
            @elseif ($pengajuan->layanan->url == 'perubahan-nama' && $pengajuan->id_layanan == 11)
                @include('app.layanan.show.perubahan-nama')
            @elseif ($pengajuan->layanan->url == 'perubahan-status-kewarganegaraan' && $pengajuan->id_layanan == 12)
                @include('app.layanan.show.perubahan-status-kewarganegaraan')
            @elseif ($pengajuan->layanan->url == 'pencatatan-peristiwa-penting-lainnya' && $pengajuan->id_layanan == 13)
                @include('app.layanan.show.pencatatan-peristiwa-penting-lainnya')
            @elseif ($pengajuan->layanan->url == 'pembetulan-akta' && $pengajuan->id_layanan == 14)
                @include('app.layanan.show.pembetulan-akta')
            @elseif ($pengajuan->layanan->url == 'pembatalan-akta' && $pengajuan->id_layanan == 15)
                @include('app.layanan.show.pembatalan-akta')
            @elseif ($pengajuan->layanan->url == 'pelapor-pencatatan-sipil-dari-luar-wilayah-nkri' &&
                $pengajuan->id_layanan == 16)
                @include('app.layanan.show.pelapor-pencatatan-sipil-dari-luar-wilayah-nkri')
            @else
                @include('app.layanan.show.404')
            @endif
        </div>
    </div>

@endsection
