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
        <title>Verify Account - Nsansa Wellness</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.svg') }}">
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
<div class="container">
    <div class="row justify-content-center">
            <div class="card lg:mt-6 lx:mt-6 mt-6 w-3/4 my-10 p-10">
                <div class="-intro-x text-primary font-bold text-5xl mb-4 leading-tight mt-5">
                    {{ __('Verify Your Email Address') }}
                </div>
                <div class="card-body py-4">
                    @if (session('resent'))
                        <div class="alert alert-success py-4" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline py-2" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary shadow-md btn-link text-white">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
    </div>
</div>
</div>
</div>
</div>

<!-- BEGIN: JS Assets-->
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>