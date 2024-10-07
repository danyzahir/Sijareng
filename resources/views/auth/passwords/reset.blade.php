@extends('layouts.app')
<style>
    /* Basic Reset */
body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa; /* Light background color */
}

.container {
    margin-top: 50px; /* Space from the top of the page */
}

.card {
    border: 1px solid #007bff; /* Blue border for the card */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
}

.card-header {
    background-color: #007bff; /* Header background color */
    color: white; /* Header text color */
    font-weight: bold; /* Bold header text */
    font-size: 1.5rem; /* Larger font size for the header */
}

.card-body {
    padding: 30px; /* Padding inside the card body */
}

/* Form Styles */
.form-label {
    font-weight: bold; /* Bold labels */
}

.form-control {
    border: 1px solid #ced4da; /* Default border color */
    border-radius: 5px; /* Rounded corners for inputs */
}

.form-control:focus {
    border-color: #007bff; /* Change border color on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Add glow effect */
}

.invalid-feedback {
    font-size: 0.875rem; /* Smaller font size for error messages */
    color: #dc3545; /* Bootstrap's danger color */
}

/* Button Styles */
.btn {
    background-color: #007bff; /* Primary button color */
    border: none; /* Remove border */
    color: white; /* Text color */
    border-radius: 5px; /* Rounded corners for buttons */
    padding: 10px 20px; /* Padding for buttons */
    font-weight: bold; /* Bold button text */
    cursor: pointer; /* Pointer cursor on hover */
}

.btn:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

/* Responsive Styles */
@media (max-width: 576px) {
    .container {
        margin-top: 20px; /* Adjust margin for small screens */
    }
}

</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
