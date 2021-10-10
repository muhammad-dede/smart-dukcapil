@extends('layouts.auth.template')

@section('title', 'Login')

@section('content')
<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <form class="form w-100" id="form-login" action="{{ url('login') }}" method="POST">
        @csrf
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Login</h1>
            <div class="text-gray-400 fw-bold fs-5">Belum memiliki akun?
                <a href="{{ url('register') }}" class="link-primary fw-bolder">Daftar
                    disini</a></div>
        </div>
        <div class="fv-row mb-10">
            <label class="form-label fs-6 fw-bolder text-dark">Email/Username</label>
            <input id="username"
                class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                type="text" name="username" autocomplete="off" value="{{ old('username') }}" />
            <small class="username_error text-danger" id="error-text"></small>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                <a href="{{ url('password/reset') }}" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>
            </div>
            <input id="password"
                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                type="password" name="password" autocomplete="off" />
            <small class="password_error text-danger" id="error-text"></small>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="text-center">
            <button type="button" id="btn-login" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Login</span>
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
<script src="{{ asset('') }}js/auth/login.js"></script>
@endpush
