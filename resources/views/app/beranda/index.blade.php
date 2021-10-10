@extends('layouts.app.template')
@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-white fw-bolder my-1 fs-5">Selamat Datang</h1>
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">{{ auth()->user()->nama_lengkap }}</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-white opacity-75">
                    Beranda
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center py-3 py-md-1">
            <a href="{{ url('app/layanan') }}"
                class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder">Layanan
                Pengajuan</a>
            {{-- <a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> --}}
        </div>
    </div>
</div>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="d-flex flex-column flex-xl-row">
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                <div class="card mb-5 mb-xl-8">
                    <div class="card-body">
                        <div class="d-flex flex-center flex-column py-5">
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="{{ asset('') }}images/profil/{{ auth()->user()->profil }}" alt="image" />
                            </div>
                            <a href="#"
                                class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ auth()->user()->nama_lengkap }}</a>
                            <div class="mb-9">
                                <div class="badge badge-lg badge-light-primary d-inline">NIK: {{ auth()->user()->nik }}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                href="#kt_user_view_details" role="button" aria-expanded="false"
                                aria-controls="kt_user_view_details">Detail
                                <span class="ms-2 rotate-180">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </span></div>
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Ubah Profil">
                                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-ubah-profil">Edit</a>
                            </span>
                        </div>
                        <div class="separator"></div>
                        <div id="kt_user_view_details" class="collapse show">
                            <div class="pb-5 fs-6">
                                <div class="fw-bolder mt-5">Nomor Induk Kependudukan</div>
                                <div class="text-gray-600">{{ auth()->user()->nik }}</div>
                                <div class="fw-bolder mt-5">Nomor Kartu Keluarga</div>
                                <div class="text-gray-600">{{ auth()->user()->no_kk }}</div>
                                <div class="fw-bolder mt-5">Nama Lengkap</div>
                                <div class="text-gray-600">{{ ucwords(auth()->user()->nama_lengkap) }}</div>
                                <div class="fw-bolder mt-5">Tempat Lahir</div>
                                <div class="text-gray-600">{{ ucwords(auth()->user()->tempat_lahir) }}</div>
                                <div class="fw-bolder mt-5">Tanggal Lahir</div>
                                <div class="text-gray-600">
                                    {{ \Carbon\Carbon::parse(auth()->user()->tgl_lahir)->isoFormat('dddd, D MMM Y') }}
                                </div>
                                <div class="fw-bolder mt-5">Nama Ibu Kandung</div>
                                <div class="text-gray-600">{{ ucwords(auth()->user()->nama_ibu) }}</div>
                                <div class="fw-bolder mt-5">Nomor Telepon</div>
                                <div class="text-gray-600">{{ auth()->user()->telp }}</div>
                                <div class="fw-bolder mt-5">Username</div>
                                <div class="text-primary">{{ strtolower(auth()->user()->username) }}</div>
                                <div class="fw-bolder mt-5">Email</div>
                                <div class="text-primary">{{ auth()->user()->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-lg-row-fluid ms-lg-15">
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#pengajuan_saya">Pengajuan Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                            href="#riwayat_pengajuan">Riwayat Pengajuan</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pengajuan_saya" role="tabpanel">
                        <div class="card card-flush mb-6 mb-xl-9">
                            <div class="card-header mt-6">
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">Data Pengajuan</h2>
                                    <div class="fs-6 fw-bold text-muted">{{ $data_pengajuan->count() }} pengajuan</div>
                                </div>
                                <div class="card-toolbar">
                                    <a href="{{ url('app/layanan') }}" class="btn btn-light-primary btn-sm">Tambah
                                        Pengajuan</a>
                                </div>
                            </div>
                            <div class="card-body p-9 pt-4">
                                @forelse ($data_pengajuan as $pengajuan)
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-bold ms-5">
                                        <div class="fs-7 mb-1">
                                            {{ \Carbon\Carbon::parse($pengajuan->tgl)->isoFormat('dddd, D MMMM Y') }}
                                        </div>
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Layanan
                                            {{ $pengajuan->layanan->layanan }}</a>
                                        <div class="fs-7 text-muted">Status pengajuan &nbsp;:&nbsp;
                                            @if ($pengajuan->id_user == null)
                                            <span class="text-info">Sedang Diverifikasi</span>
                                            @else
                                            @if ($pengajuan->verifikasi == false)
                                            <span class="text-primary">Sedang Diproses</span>
                                            @else
                                            @if ($pengajuan->tolak == true)
                                            <span class="text-danger">Ditolak</span>
                                            @elseif ($pengajuan->terima == true)
                                            <span class="text-success">Ditolak</span>
                                            @endif
                                            @endif
                                            @endif
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">Detail</a>
                                </div>
                                @empty
                                <div class="text-center mt-6 mb-10">
                                    <h3 class="text-muted text-center">Belum ada pengajuan</h3>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="riwayat_pengajuan" role="tabpanel">
                        <div class="card card-flush mb-6 mb-xl-9">
                            <div class="card-header mt-6">
                                <div class="card-title flex-column">
                                    <h2 class="mb-1">Data Riwayat</h2>
                                    <div class="fs-6 fw-bold text-muted">{{ $data_riwayat->count() }} riwayat</div>
                                </div>
                            </div>
                            <div class="card-body p-9 pt-4">
                                @forelse ($data_riwayat as $riwayat)
                                <div class="d-flex flex-stack position-relative mt-6">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                    </div>
                                    <div class="fw-bold ms-5">
                                        <div class="fs-7 mb-1">
                                            {{ \Carbon\Carbon::parse($riwayat->updated_at)->isoFormat('dddd, D MMMM Y') }}
                                        </div>
                                        <a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Layanan
                                            {{ $riwayat->layanan->layanan }}p</a>
                                        <div class="fs-7 text-muted">Status pengajuan&nbsp;:&nbsp;
                                            <span class="text-success">Pengajuan Diterima</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
                                </div>
                                @empty
                                <div class="text-center mt-6 mb-10">
                                    <h3 class="text-muted text-center">Belum ada riwayat pengajuan</h3>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Edit Profil --}}
        <div class="modal fade" id="modal-ubah-profil" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                    <form class="form" action="#" id="kt_modal_update_user_form">
                        <div class="modal-header" id="kt_modal_update_user_header">
                            <h2 class="fw-bolder">Update Data Saya</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body py-10 px-lg-17">
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_modal_update_user_header"
                                data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                                <div class="mb-7">
                                    <label class="fs-6 fw-bold mb-2">
                                        <span>Update Profil</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <div class="mt-1">
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url({{ asset('') }}assets/media/avatars/blank.png)">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url({{ asset('') }}images/profil/{{ auth()->user()->profil }}">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">NIK</label>
                                    <input id="nik" type="text" class="form-control form-control-solid" placeholder=""
                                        name="nik" value="{{ auth()->user()->nik }}" />
                                    <small class="nik_error text-danger" id="error-text"></small>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">No KK</label>
                                    <input id="no_kk" type="text" class="form-control form-control-solid" placeholder=""
                                        name="no_kk" value="{{ auth()->user()->no_kk }}" />
                                    <small class="no_kk_error text-danger" id="error-text"></small>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">Nama Lengkap</label>
                                    <input id="nama_lengkap" type="text" class="form-control form-control-solid"
                                        placeholder="" name="nama_lengkap" value="{{ auth()->user()->nama_lengkap }}" />
                                    <small class="nama_lengkap_error text-danger" id="error-text"></small>
                                </div>
                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">Tempat Lahir</label>
                                        <input id="tempat_lahir" type="text" class="form-control form-control-solid"
                                            placeholder="" name="tempat_lahir"
                                            value="{{ auth()->user()->tempat_lahir }}" />
                                        <small class="tempat_lahir_error text-danger" id="error-text"></small>
                                    </div>
                                    <div class="col-md-6 fv-row">
                                        <label class="fs-6 fw-bold mb-2">Tanggal Lahir</label>
                                        <input id="tgl_lahir" type="date" class="form-control form-control-solid"
                                            placeholder="" name="tgl_lahir" value="{{ auth()->user()->tgl_lahir }}" />
                                        <small class="tempat_lahir_error text-danger" id="error-text"></small>
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">Nama Ibu</label>
                                    <input id="nama_ibu" type="text" class="form-control form-control-solid"
                                        placeholder="" name="nama_ibu" value="{{ auth()->user()->nama_ibu }}" />
                                    <small class="nama_ibu_error text-danger" id="error-text"></small>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">Telepon/No Handphone</label>
                                    <input id="telp" type="text" class="form-control form-control-solid" placeholder=""
                                        name="telp" value="{{ auth()->user()->telp }}" />
                                    <small class="telp_error text-danger" id="error-text"></small>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">Username</label>
                                    <input id="username" type="text" class="form-control form-control-solid"
                                        placeholder="" name="username" value="{{ auth()->user()->username }}" />
                                    <small class="username_error text-danger" id="error-text"></small>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-bold mb-2">
                                        <span>Email</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Email Aktif"></i>
                                    </label>
                                    <input id="email" type="text" class="form-control form-control-solid" placeholder=""
                                        name="email" value="{{ auth()->user()->telp }}" />
                                    <small class="email_error text-danger" id="error-text"></small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer flex-center">
                            <button id="btn-update-profil" type="button" class="btn btn-primary">
                                <span class="indicator-label">Update</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button id="btn-batal-update-profil" type="button" class="btn btn-light me-3"
                                data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
