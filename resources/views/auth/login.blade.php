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
                        disini</a>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="fv-row mb-10">
                <label class="form-label fs-6 fw-bolder text-dark">Username atau Email</label>
                <input id="username"
                    class="form-control form-control-lg form-control-solid @error('username') is-invalid @enderror"
                    type="text" name="username" autocomplete="off" value="{{ old('username') }}" />
                @if ($errors->has('username'))
                    <div class="invalid-feedback">{{ $errors->first('username') }}</div>
                @endif
            </div>
            <div class="fv-row mb-10">
                <div class="d-flex flex-stack mb-2">
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                    <a href="{{ url('password/reset') }}" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>
                </div>
                <input id="password"
                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                    type="password" name="password" autocomplete="off" />
                @if ($errors->has('password'))
                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" id="btn-login" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">Login</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </form>
    </div>

@endsection
