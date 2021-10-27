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
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Pelaporan Sipil Layanan {{ $layanan->layanan }}</h3>
                    </div>
                </div>
                <div id="kt_account_profile_details" class="collapse show">
                    <form action="{{ url('app/layanan/store') }}/{{ $layanan->url }}" id="form-pengajuan-layanan"
                        class="form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="url-layanan" value="{{ $layanan->url }}">
                        <div class="card-body border-top p-9">
                            @if ($layanan->url == 'kelahiran' || $layanan->id == 1)
                                @include('app.layanan.form.kelahiran')
                            @elseif ($layanan->url == 'lahir-mati' || $layanan->id == 2)
                                @include('app.layanan.form.lahir-mati')
                            @elseif ($layanan->url == 'lahir-perkawinan' || $layanan->id == 3)
                                @include('app.layanan.form.perkawinan')
                            @elseif ($layanan->url == 'pembatalan-perkawinan' || $layanan->id == 4)
                                @include('app.layanan.form.pembatalan-perkawinan')
                            @elseif ($layanan->url == 'perceraian' || $layanan->id == 5)
                                @include('app.layanan.form.perceraian')
                            @elseif ($layanan->url == 'pembatalan-perceraian' || $layanan->id == 6)
                                @include('app.layanan.form.pembatalan-perceraian')
                            @elseif ($layanan->url == 'kematian' || $layanan->id == 7)
                                @include('app.layanan.form.kematian')
                            @elseif ($layanan->url == 'pengangkatan-anak' || $layanan->id == 8)
                                @include('app.layanan.form.pengangkatan-anak')
                            @elseif ($layanan->url == 'pengakuan-anak' || $layanan->id == 9)
                                @include('app.layanan.form.pengakuan-anak')
                            @elseif ($layanan->url == 'pengesahan-anak' || $layanan->id == 10)
                                @include('app.layanan.form.pengesahan-anak')
                            @elseif ($layanan->url == 'perubahan-nama' || $layanan->id == 11)
                                @include('app.layanan.form.perubahan-nama')
                            @elseif ($layanan->url == 'perubahan-status-kewarganegaraan' || $layanan->id == 12)
                                @include('app.layanan.form.perubahan-status-kewarganegaraan')
                            @elseif ($layanan->url == 'pencatatan-peristiwa-penting-lainnya' || $layanan->id == 13)
                                @include('app.layanan.form.pencatatan-peristiwa-penting-lainnya')
                            @elseif ($layanan->url == 'pembetulan-akta' || $layanan->id == 14)
                                @include('app.layanan.form.pembetulan-akta')
                            @elseif ($layanan->url == 'pembatalan-akta' || $layanan->id == 15)
                                @include('app.layanan.form.pembatalan-akta')
                            @elseif ($layanan->url == 'pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri' ||
                                $layanan->id == 16)
                                @include('app.layanan.form.pelaporan-pencatatan-sipil-dari-luar-wilayah-nkri')
                            @else
                                @include('app.layanan.form.404')
                            @endif
                            @if (count($layanan->persyaratan))
                                <div class="py-4 text-muted">
                                    <hr>
                                </div>
                                {{-- Upload Berkas --}}
                                <div id="upload_berkas">
                                    <h2 class="mb-5 text-primary">Upload Berkas Persyaratan</h2>
                                    @forelse ($berkas_persyaratan as $index => $persyaratan)
                                        <div class="row mb-5">
                                            <label
                                                class="col-lg-5 col-form-label required fw-bold fs-6">{{ $persyaratan->persyaratan }}</label>
                                            <div class="col-lg-7 fv-row">
                                                <input type="hidden"
                                                    name="berkas_persyaratan[{{ $index }}][id_persyaratan]"
                                                    value="{{ $persyaratan->id }}">
                                                <input type="hidden"
                                                    name="berkas_persyaratan[{{ $index }}][type_backend]"
                                                    value="{{ $persyaratan->type_backend }}">
                                                <input id="berkas_persyaratan_{{ $index }}_berkas" type="file"
                                                    name="berkas_persyaratan[{{ $index }}][berkas]"
                                                    class="form-control form-control-lg form-control-solid"
                                                    accept="{{ $persyaratan->type_frontend }}" />
                                                <small
                                                    class="berkas_persyaratan_{{ $index }}_berkas_error text-danger"
                                                    id="error-text"></small>
                                                <small class="form-text file_note">Ketentuan: File berekstensi
                                                    {{ $persyaratan->type_frontend }} & Ukuran Maksimal 1MB.</small>
                                                @if ($errors->has('berkas_persyaratan.' . $index . '.berkas'))
                                                    <small class="text-danger form-text fw-bold">&nbsp;Peringatan:&nbsp;
                                                        {{ $errors->first('berkas_persyaratan.' . $index . '.berkas') }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    @empty
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                <div class="mb-md-0 fw-bold">
                                                    <h5 class="text-gray-900 fw-bolder">Tanpa Berkas Persyaratan</h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            @endif
                            {{-- Note Pelapor --}}
                            <div
                                class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mt-15">
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="black" />
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <div class="mb-3 mb-md-0 fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">Catatan</h4>
                                        <div class="fs-6 text-gray-700 pe-7">Pelapor siap bertanggung jawab atas pelaporan
                                            pencatatan sipil yang akan diajukan!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{ url('app/layanan') }}"
                                class="btn btn-light btn-active-light-primary me-2">Batal</a>
                            <button type="submit" class="btn btn-primary" id="btn-pengajuan">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        var base_url = {!! json_encode(url('/')) !!};
    </script>
    <script src="{{ asset('') }}js/app/layanan/create.js"></script>
@endpush
