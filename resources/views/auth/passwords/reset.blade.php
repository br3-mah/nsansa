<!DOCTYPE html>
<!--
Template Name: Enigma - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Reset Password - Nsansa Wellness</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="bg-white">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="{{ route('welcome') }}" class="-intro-x flex items-center pt-5">
                        <img width="70" height="70" src="{{ asset('uploads/sites/304/2022/06/logos.svg')}}" class="attachment-full size-full rounded-full" alt="" loading="lazy" />
                        <span class="text-info text-lg ml-3"> Nsansa Wellness </span> 
                    </a>
                    <div class="my-auto">
                        {{-- <img class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg"> --}}

                        {{-- @if(request()->get('role') != 'patient')
                        <small class="-intro-x text-lg text-info text-opacity-70 dark:text-slate-400">
                            Private practice with no doors & no overhead.
                        </small>
                        @else
                        <small class="-intro-x text-lg text-success text-opacity-70 dark:text-slate-400">
                            Join online therapy with a licensed therapist
                        </small>
                        @endif --}}
                    </div>
                </div>


            <div class="card lg:mt-6 lx:mt-6 mt-6 w-3/4 my-10 p-10">
                <div class="-intro-x text-primary font-bold text-5xl mb-4 leading-tight mt-5">
                    Change Password
                </div>

                <div class="card-body -intro-x ">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label style="color:#F65B08" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="color:#F65B08" for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="color:#F65B08" for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
</div>

<!-- BEGIN: JS Assets-->
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>