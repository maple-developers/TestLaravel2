@extends('layouts.header')
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Cover Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo.jpg">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <h1 class="">Log In to <a href="index.html"><span class="brand-name">CORK</span></a>
                </h1>
                <p class="signup-link">New Here? <a href="/register">Create an account</a></p>
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </x-slot>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}" class="text-left">
                    @csrf
                    <div id="username-field" class="field-wrapper input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Username"
                            required autofocus>
                    </div>
                    <div id="password-field" class="field-wrapper input mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <input id="password" name="password" type="password" class="form-control"
                            placeholder="Password">
                    </div>
                    <!-- Remember Me -->{{ __('Remember me') }}
                    <div class="field-wrapper">
                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="field-wrapper toggle-pass">
                            <p class="d-inline-block">Show Password</p>
                            <label class="switch s-primary">
                                <input type="checkbox" id="toggle-password" class="d-none">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('register'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('register') }}">
                                {{ __('register') }}
                            </a>
                        @endif

                    </div>
                </form>
                <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html">CORK</a> is a
                    product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a
                        href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

            </div>
        </div>

        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>


</body>

</html>
