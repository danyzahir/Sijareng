@extends('layouts.app')
<style>
    body {
        background-color: #008CBA;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        background-color: white;
        padding: 50px 40px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        width: 420px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    h1 {
        margin-bottom: 40px;
        font-size: 26px;
        color: #333;
    }

    .auth-buttons {
        display: flex;
        flex-direction: column;
        gap: 15px; /* Jarak antar tombol */
    }

    .auth-buttons a {
        background-color: #008CBA;
        color: white;
        padding: 16px 0;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .auth-buttons a:hover {
        background-color: #006994;
        transform: translateY(-3px);
    }

    .auth-buttons a:active {
        background-color: #007EA7;
        transform: translateY(0);
    }

    .auth-buttons a:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(0, 140, 186, 0.4);
    }
</style>

@section('content')
<div class="container">
    <h1>{{ __('SIjareng') }}</h1>

    <div class="auth-buttons">
        <a href="{{ route('login') }}" class="login">{{ __('Log in') }}</a>
        <a href="{{ route('register') }}" class="register">{{ __('Register') }}</a>
    </div>
</div>
@endsection
