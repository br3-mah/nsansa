<!DOCTYPE html>
<html lang="en" style="background-color: #ffffff">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Nsansa Wellness</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <link rel="icon" type="image/png" href="{{ asset('favicon.svg') }}">
        <!-- END: CSS Assets-->
    </head>
    <style>
        /* Code By Webdevtrick ( https://webdevtrick.com ) */
        @import "https://fonts.googleapis.com/css?family=Lato";
        body {
            background-color: #ffffff;
        }
        .center {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 570px;
            height: 40px;
        }
        .input {
            height: 40px;
            width: 400px;
            background-color: white;
            display: inline-block;
            border-radius: 5px;
        }
        .textZone {
            position: absolute;
            top: 5px;
            padding-left: 8px;
            width: 392px;
            height: 30px;
            outline: none;
            display: inline-block;
            white-space: nowrap;
            overflow: hidden;
            cursor: text;
        }
        .cursor {
            width: 1px;
            height: 100%;
            background-color: #222222;
            display: inline-block;
            animation-name: blink;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        .hidden {
            visibility: hidden;
        }
        .character, .placeholder {
            position: relative;
            display: inline-block;
            vertical-align: top;
            font-size: 24px;
            color: #555555;
        }
        .placeholder {
            color: #BFBFBF;
        }
        .space {
            display: inline-block;
            width: 7.2px;
            height: 100%;
        }
        @keyframes blink {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        }
        @keyframes colorTransition {
        0% {
            color: #555555;
        }
        50% {
            color: #F54E4E;
        }
        75% {
            color: #444444;
        }
        100% {
            color: #555555;
        }
        }
        .selector {
            width: 150px;
            margin-right: 10px;
            height: 40px;
            border: 1px white solid;
            display: inline-block;
            vertical-align: top;
            text-align: center;
            line-height: 40px;
            color: white;
            border-radius: 5px;
            font-family: 'Lato', sans-serif;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: ns-resize;
        }
        .selection {
            animation-duration: 100ms;
        }
        .upArrow {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 5px 10px 5px;
            position: absolute;
            top: -20px;
            left: 72.5px;
            cursor: pointer;
        }
        .downArrow {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 5px 0 5px;
            position: absolute;
            bottom: -22px;
            left: 72.5px;
            cursor: pointer;
        }
        .upWhiteArrow {
            border-color: transparent transparent #ffffff transparent;
        }
        .upGreyArrow {
            border-color: transparent transparent #777777 transparent;
        }
        .downWhiteArrow {
            border-color: #ffffff transparent transparent transparent;
        }
        .downGreyArrow {
            border-color: #777777 transparent transparent transparent;
        }

        #loginFrm{
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            background: rgba(255, 255, 255, 0.55);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(8.9px);
            -webkit-backdrop-filter: blur(8.9px);
        }
        #loginCover{
            background-size:cover; 
            background-image:url('https://a9p9n2x2.stackpathcdn.com/wp-content/blogs.dir/1/files/2016/06/iStock_67536037_MEDIUM-2.jpg');
        }
        #loginLogo{
                display:none;
        }
        @media only screen and (max-width: 600px) {        
            #loginFrm{
                margin-top:0;
                width: 100%;
                border-radius: 0px;
                padding: 0;
                box-shadow:none;
                box-shadow:none;
            }

            #loginCover{
                background-image:none;
            }
            
            #loginLogo{
                display:block;
                width: 50px;
                height: 50px;
                margin-left: 40%;
            }
        }


    </style>
    <!-- END: Head -->
    <body>
        <div id="loginCover">
            <div class="container block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="{{ route('welcome') }}" class="-intro-x flex items-center pt-5">
                        <img width="70" height="70" src="uploads/sites/304/2022/06/logos.svg" class="attachment-full size-full rounded-full" alt="" loading="lazy" />
                        <span class="text-white font-bold text-lg ml-3"> Nsansa Wellness </span> 
                    </a>
                    <div class="my-auto">
                        {{-- <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg"> --}}
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Sign in to your account.
                        </div>
                        {{-- <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"> Sign in to your account.</div> --}}
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <img id="loginLogo" src="uploads/sites/304/2022/06/logos.svg" class="attachment-full size-full" alt="" loading="lazy" />

                <form id="loginFrm" class="w-3/4 my-10 p-10" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mx-auto bg-white dark:bg-darkmode-600 xl:bg-transparent sm:px-8 p-10 rounded-md shadow-md xl:shadow-none sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 style="text-align: center" class="intro-x font-bold text-xl xl:text-2xl text-center text-primary xl:text-left">
                            Welcome back!
                        </h2>
                        @error('email')
                            <div class="intro-x alert alert-danger show flex items-center mt-3 mb-2" role="alert"> 
                                <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $message }}
                            </div>
                        @enderror
                        {{-- <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> --}}
                        <div class="lg:intro-x mt-8">
                            <input placeholder="Your email" required id="email" type="email" name="email" class="form-control intro-x login__input py-3 px-4 block @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                            <input placeholder="Your password" required id="password" type="password" name="password" class="form-control intro-x login__input py-3 px-4 block mt-4 @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                            @error('password')
                                <small class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="lg:intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="{{ route('password.request') }}">Forgot Password?</a> 
                        </div>
                        {{-- <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4 w-full">

                        </div> --}}
                        <div class="lg:intro-x mt-5 xl:mt-8 text-center text-md xl:text-left w-full">
                            <button type="submit" class="btn btn-warning py-3 px-4 w-full xl:w-full xl:mr-3 align-top">Login</button>
                            <a href="{{ route('start') }}" class="btn text-warning btn-outline-warning py-3 px-4 mt-2 w-full xl:w-full xl:mr-3">Sign up as Patient</a><br>
                            <a href="{{ route('careers') }}" class="btn btn-outline-success py-3 mt-2 px-4 w-full xl:w-full xl:mr-3">Find a Therapist Job</a>
                        </div>
                    </div>
                </form>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src="{{ asset('public/dist/js/inputstyle.js') }}"></script>
        <!-- END: JS Assets-->
        <script>
            function handleExpiredToken() {
                // Refresh the page when the CSRF token has expired
                location.reload();
            }

            // Attach an event listener for AJAX errors
            window.addEventListener('error', function(event) {
                if (event.target instanceof XMLHttpRequest && event.target.status === 419) {
                    handleExpiredToken();
                }
            });
        </script>
    </body>
</html>