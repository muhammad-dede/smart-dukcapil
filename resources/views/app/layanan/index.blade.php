@extends('layouts.app.template')
@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <div class="page-title d-flex flex-column me-3">
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-white opacity-75">
                        Layanan
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center py-3 py-md-1">
                <a href="{{ url('app/beranda') }}" class="btn btn-bg-white btn-active-color-primary">Pengajuan Saya</a>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="row g-6 g-xl-9 pb-10">
                @foreach ($data_layanan as $layanan)
                    <div class="col-xl-3 col-md-4 col-sm-4 col-xs-6 col-12">
                        <a href="{{ url('app/layanan') }}/{{ $layanan->url }}"
                            class="card border border-2 border-gray-300 border-hover h-100">
                            <div class="card-header border-0 pt-9">
                                <div class="card-title m-0">
                                    <div class="symbol symbol-100px w-100px">
                                        <i style="font-size: 30px; color: {{ $layanan->color }};"
                                            class="{{ $layanan->icon }}"></i>
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Layanan</span>
                                </div>
                            </div>
                            <div class="card-body p-9">
                                <div class="fs-3 fw-bolder text-dark">{{ $layanan->layanan }}</div>
                                <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Persyaratan :</p>
                                @forelse ($layanan->persyaratan as $persyaratan)
                                    <div class="d-flex flex-wrap mb-0">
                                        <div class="border border-gray-300 border-dashed rounded w-100 py-2 px-4 me-7 mb-3">
                                            <div class="fs-6 text-gray-800 fw-bolder">{{ $persyaratan->persyaratan }}
                                            </div>
                                            <div class="fw-bold text-gray-400">{{ $persyaratan->jenis }}</div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="d-flex flex-wrap mb-0">
                                        <div class="border border-gray-300 border-dashed rounded w-100 py-2 px-4 me-7 mb-3">
                                            <div class="fs-6 text-gray-800 fw-bolder">Tanpa Persyaratan</div>
                                            <div class="fw-bold text-gray-400">None</div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
