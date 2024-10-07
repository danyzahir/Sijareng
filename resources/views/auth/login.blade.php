@extends('layouts.app')
<style>
    body {
        background-color: #abc1c9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 24px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
        transition: border 0.3s ease, box-shadow 0.3s ease;
        font-size: 14px;
    }

    input:focus {
        border-color: #008CBA;
        box-shadow: 0 0 8px rgba(0, 140, 186, 0.2);
        outline: none;
    }

    button {
        background-color: #008CBA;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    button:hover {
        background-color: #006994;
        transform: translateY(-2px);
    }

    button:active {
        background-color: #007EA7;
        transform: translateY(0);
    }

    a {
        color: #008CBA;
        text-decoration: none;
        font-size: 14px;
        display: inline-block;
        margin-top: 10px;
        transition: color 0.3s ease;
    }

    a:hover {
        text-decoration: underline;
        color: #006994;
    }

    .text-center {
        text-align: center;
    }

    /* Styling untuk checkbox */
    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .form-check-input {
        width: 20px;
        height: 20px;
        margin-right: 10px;
        cursor: pointer;
    }

    .form-check-label {
        font-size: 14px;
        color: #333;
        cursor: pointer;
    }

    .forgot-password {
        text-align: right;
        margin-top: 5px;
    }

</style>

@section('content')
<div class="container">
    <h1>{{ __('Login') }}</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>

        <div class="forgot-password">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

        <button type="submit">{{ __('Login') }}</button>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
        </div>
    </form>
</div>
@endsection
