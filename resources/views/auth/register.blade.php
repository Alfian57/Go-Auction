@extends('layouts.auth')

@section('content')
    <form class="login100-form flex-sb flex-w" action="{{ route('register.create') }}" method="POST">
        @csrf
        <img src="/assets/img/logo-full.png" alt="Logo" class="w-100 img-fluid">
        <span class="login100-form-title">
            Daftar
        </span>

        {{-- Nama --}}
        <div class="p-t-31 p-b-9">
            <span class="txt1">
                Nama Lengkap
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="text" name="nama_15458" placeholder="Nama" value="{{ old('nama_15458') }}"
                required autofocus>
            <span class="focus-input100"></span>
        </div>
        @error('nama_15458')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        {{-- Username --}}
        <div class="p-t-31 p-b-9">
            <span class="txt1">
                Username
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="text" name="username_15458" placeholder="Username"
                value="{{ old('username_15458') }}" required>
            <span class="focus-input100"></span>
        </div>
        @error('username_15458')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        {{-- Password --}}
        <div class="p-t-31 p-b-9">
            <span class="txt1">
                Password
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" name="password_15458" placeholder="Password"
                value="{{ old('password_15458') }}" required>
            <span class="focus-input100"></span>
        </div>
        @error('password_15458')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        {{-- Konfirmasi Password --}}
        <div class="p-t-31 p-b-9">
            <span class="txt1">
                Konfirmasi Password
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="password" name="confirm_password" placeholder="Konfirmasi Password"
                value="{{ old('confirm_password') }}" required>
            <span class="focus-input100"></span>
        </div>
        @error('confirm_password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        {{-- No Telepon --}}
        <div class="p-t-31 p-b-9">
            <span class="txt1">
                No Telepon
            </span>
        </div>
        <div class="wrap-input100">
            <input class="input100" type="number" name="telp_15458" placeholder="No Telepon"
                value="{{ old('telp_15458') }}" required>
            <span class="focus-input100"></span>
        </div>
        @error('telp_15458')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="container-login100-form-btn m-t-17">
            <button class="login100-form-btn">
                Daftar
            </button>
        </div>

        <div class="w-full text-center p-t-55">
            <span class="txt2">
                Sudah Punya Akun?
            </span>

            <a href="{{ route('login') }}" class="txt2 bo1">
                Masuk Sekarang
            </a>
        </div>
    </form>
@endsection
