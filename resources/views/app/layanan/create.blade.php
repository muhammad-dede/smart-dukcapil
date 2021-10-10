@extends('layouts.app.template')
@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ config('app.name') }}</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-white opacity-75">
                    Pengajuan Layanan
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center py-3 py-md-1">
            <a href="{{ url('app/layanan') }}" class="btn btn-bg-white btn-active-color-primary">Kembali</a>
        </div>
    </div>
</div>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        @if ($layanan->url == 'kelahiran' || $layanan->id == 1)
        @include('app.layanan.form.kelahiran')
        @else
        @include('app.layanan.form.coming-soon')
        @endif
    </div>
</div>

@endsection

@push('scripts')
<script>
    var base_url = {!! json_encode(url('/')) !!};
</script>
<script src="{{ asset('') }}js/app/layanan/create.js"></script>
@endpush
