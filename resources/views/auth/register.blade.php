@extends('layouts.auth.template')

@section('title', 'Buat Akun')

@section('content')
    <div class="w-lg-700px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <form action="{{ url('register') }}" class="form w-100" novalidate="novalidate" id="form-daftar" method="POST">
            @csrf
            <div class="mb-10 text-center">
                <h1 class="text-dark mb-3">Buat Akun</h1>
                <div class="text-gray-400 fw-bold fs-5">Sudah memiliki akun?
                    <a href="{{ url('login') }}" class="link-primary fw-bolder">Login
                        disini</a>
                </div>
            </div>
            <div class="row fv-row mb-7">
                <div class="col-xl-6">
                    <label class="form-label fw-bolder text-dark fs-6">NIK</label>
                    <input id="nik"
                        class="form-control form-control-lg form-control-solid @error('nik') is-invalid @enderror"
                        type="text" placeholder="" name="nik" autocomplete="off" value="{{ old('nik') }}" />
                    @if ($errors->has('nik'))
                        <div class="invalid-feedback">{{ $errors->first('nik') }}</div>
                    @endif
                </div>
                <div class="col-xl-6">
                    <label class="form-label fw-bolder text-dark fs-6">No Kartu Keluarga</label>
                    <input id="no_kk"
                        class="form-control form-control-lg form-control-solid @error('no_kk') is-invalid @enderror"
                        type="text" placeholder="" name="no_kk" autocomplete="off" value="{{ old('no_kk') }}" />
                    @if ($errors->has('no_kk'))
                        <div class="invalid-feedback">{{ $errors->first('no_kk') }}</div>
                    @endif
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
                <input id="nama_lengkap"
                    class="form-control form-control-lg form-control-solid @error('nama_lengkap') is-invalid @enderror"
                    type="text" placeholder="" name="nama_lengkap" autocomplete="off" value="{{ old('nama_lengkap') }}" />
                @if ($errors->has('nama_lengkap'))
                    <div class="invalid-feedback">{{ $errors->first('nama_lengkap') }}</div>
                @endif
            </div>
            <div class="row fv-row mb-7">
                <div class="col-xl-6">
                    <label class="form-label fw-bolder text-dark fs-6">Tempat Lahir</label>
                    <input id="tempat_lahir"
                        class="form-control form-control-lg form-control-solid @error('tempat_lahir') is-invalid @enderror"
                        type="text" placeholder="" name="tempat_lahir" autocomplete="off"
                        value="{{ old('tempat_lahir') }}" />
                    @if ($errors->has('tempat_lahir'))
                        <div class="invalid-feedback">{{ $errors->first('tempat_lahir') }}</div>
                    @endif
                </div>
                <div class="col-xl-6">
                    <label class="form-label fw-bolder text-dark fs-6">Tanggal Lahir</label>
                    <input id="tgl_lahir"
                        class="form-control form-control-lg form-control-solid @error('tgl_lahir') is-invalid @enderror"
                        type="date" placeholder="" name="tgl_lahir" autocomplete="off" value="{{ old('tgl_lahir') }}" />
                    @if ($errors->has('tgl_lahir'))
                        <div class="invalid-feedback">{{ $errors->first('tgl_lahir') }}</div>
                    @endif
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Ibu</label>
                <input id="nama_ibu"
                    class="form-control form-control-lg form-control-solid @error('nama_ibu') is-invalid @enderror"
                    type="text" placeholder="" name="nama_ibu" autocomplete="off" value="{{ old('nama_ibu') }}" />
                @if ($errors->has('nama_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('nama_ibu') }}</div>
                @endif
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Telepon/No Handphone</label>
                <input id="telp" class="form-control form-control-lg form-control-solid @error('telp') is-invalid @enderror"
                    type="text" placeholder="" name="telp" autocomplete="off" value="{{ old('telp') }}" />
                @if ($errors->has('telp'))
                    <div class="invalid-feedback">{{ $errors->first('telp') }}</div>
                @endif
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Kewarganegaraan</label>
                <select id="kewarganegaraan" name="kewarganegaraan"
                    class="form-control form-control-lg form-control-solid @error('kewarganegaraan') is-invalid @enderror">
                    <option value=""></option>
                    @foreach (get_negara() as $negara)
                        <option value="{{ $negara->kode }}"
                            {{ old('kewarganegaraan') == $negara->kode ? 'selected' : '' }}>{{ $negara->nama }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('kewarganegaraan'))
                    <div class="invalid-feedback">{{ $errors->first('kewarganegaraan') }}</div>
                @endif
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Username</label>
                <input id="username"
                    class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                    type="text" placeholder="" name="username" autocomplete="off" value="{{ old('username') }}" />
                @if ($errors->has('username'))
                    <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                @endif
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                <input id="email"
                    class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="text"
                    placeholder="" name="email" autocomplete="off" value="{{ old('email') }}" />
                @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-7 fv-row" data-kt-password-meter="true">
                <div class="mb-1">
                    <label class="form-label fw-bolder text-dark fs-6">Password</label>
                    <div class="position-relative mb-1">
                        <input id="password" class="form-control form-control-lg form-control-solid" type="password"
                            placeholder="" name="password" autocomplete="off" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                            data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                    <div class="d-flex align-items-center mt-2 mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                </div>
                <div class="text-muted">Gunakan 8 karakter atau lebih dengan campuran huruf, angka &amp; simbol.</div>
            </div>
            <div class="fv-row mb-10">
                <label class="form-label fw-bolder text-dark fs-6">Ulangi Password</label>
                <input id="password_confirmation"
                    class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
                    type="password" placeholder="" name="password_confirmation" autocomplete="off" />
                @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>
            <div class="fv-row mb-10">
                <label class="form-check form-check-custom form-check-solid form-check-inline">
                    <input id="sk" class="form-check-input" type="checkbox" name="sk" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">Saya Setuju
                        <a href="#" class="ms-1 link-primary">Syarat dan Ketentuan</a>.</span>
                </label>
                @if ($errors->has('sk'))
                    <div class="alert alert-danger mt-5">{{ $errors->first('sk') }}</div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" id="btn-daftar" class="btn btn-lg btn-primary">
                    <span class="indicator-label">Daftar</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </form>
    </div>

@endsection
