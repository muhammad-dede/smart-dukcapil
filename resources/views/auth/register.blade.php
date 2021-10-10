@extends('layouts.auth.template')

@section('title', 'Buat Akun')

@section('content')
<div class="w-lg-700px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
        <div class="mb-10 text-center">
            <h1 class="text-dark mb-3">Buat Akun</h1>
            <div class="text-gray-400 fw-bold fs-5">Sudah memiliki akun?
                <a href="{{ url('login') }}" class="link-primary fw-bolder">Login
                    disini</a></div>
        </div>
        <div class="row fv-row mb-7">
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">NIK</label>
                <input id="nik" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                    name="nik" autocomplete="off" />
                <small class="nik_error text-danger" id="error-text"></small>
                @error('nik')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">No Kartu Keluarga</label>
                <input id="no_kk" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                    name="no_kk" autocomplete="off" />
                <small class="no_kk_error text-danger" id="error-text"></small>
                @error('no_kk')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
            <input id="nama_lengkap" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                name="nama_lengkap" autocomplete="off" />
            <small class="nama_lengkap_error text-danger" id="error-text"></small>
            @error('nama_lengkap')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row fv-row mb-7">
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Tempat Lahir</label>
                <input id="tempat_lahir" class="form-control form-control-lg form-control-solid" type="text"
                    placeholder="" name="tempat_lahir" autocomplete="off" />
                <small class="tempat_lahir_error text-danger" id="error-text"></small>
                @error('tempat_lahir')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-xl-6">
                <label class="form-label fw-bolder text-dark fs-6">Tanggal Lahir</label>
                <input id="tgl_lahir" class="form-control form-control-lg form-control-solid" type="date" placeholder=""
                    name="tgl_lahir" autocomplete="off" />
                <small class="tgl_lahir_error text-danger" id="error-text"></small>
                @error('tgl_lahir')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Nama Ibu</label>
            <input id="nama_ibu" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                name="nama_ibu" autocomplete="off" />
            <small class="nama_ibu_error text-danger" id="error-text"></small>
            @error('nama_ibu')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Telepon/No Handphone</label>
            <input id="telp" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                name="telp" autocomplete="off" />
            <small class="telp_error text-danger" id="error-text"></small>
            @error('telp')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Username</label>
            <input id="username" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                name="username" autocomplete="off" />
            <small class="username_error text-danger" id="error-text"></small>
            @error('username')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-7">
            <label class="form-label fw-bolder text-dark fs-6">Email</label>
            <input id="email" class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                name="email" autocomplete="off" />
            <small class="email_error text-danger" id="error-text"></small>
            @error('email')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-7 fv-row" data-kt-password-meter="true">
            <div class="mb-1">
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <div class="position-relative mb-3">
                    <input id="password" class="form-control form-control-lg form-control-solid" type="password"
                        placeholder="" name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>
            <div class="text-muted">Gunakan 8 karakter atau lebih dengan campuran huruf, angka &amp; simbol.</div>
            <small class="password_error text-danger" id="error-text"></small>
            @error('password')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fw-bolder text-dark fs-6">Ulangi Password</label>
            <input id="password_confirmation" class="form-control form-control-lg form-control-solid" type="password"
                placeholder="" name="password_confirmation" autocomplete="off" />
            <small class="password_confirmation_error text-danger" id="error-text"></small>
            @error('password_confirmation')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        {{-- <div class="fv-row mb-10">
            <label class="form-check form-check-custom form-check-solid form-check-inline">
                <input id="toc" class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-bold text-gray-700 fs-6">Saya Setuju
                    <a href="#" class="ms-1 link-primary">Syarat dan Ketentuan</a>.</span>
            </label>
            <small class="toc_error text-danger" id="error-text">Coba</small>
        </div> --}}
        <div class="text-center">
            <button type="button" id="btn-daftar" class="btn btn-lg btn-primary">
                <span class="indicator-label">Daftar</span>
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    var base_url = {!! json_encode(url('/')) !!};
</script>
<script src="{{ asset('') }}js/auth/register.js"></script>
@endpush
