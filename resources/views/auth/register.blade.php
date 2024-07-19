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
        <title>Register - Nsansa Wellness</title>
        <link rel="icon" type="image/png" href="{{ asset('favicon.svg') }}">
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
        <style>
            .file-input-container {
                position: relative;
                overflow: hidden;
                display: inline-block;
            }

            .file-input {
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
                cursor: pointer;
                width: 100%;
                height: 100%;
            }

            .file-input-button-1, .file-input-button-2, .file-input-button-3, .file-input-button-4 {
                padding: 10px 15px;
                background-color: #007BFF;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <!-- END: Head -->
    <body class="bg-white">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Register Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="{{ route('welcome') }}" class="-intro-x flex items-center pt-5">
                        <img width="70" height="70" src="uploads/sites/304/2022/06/logos.svg" class="attachment-full size-full rounded-full" alt="" loading="lazy" />
                        <span class="text-info text-lg ml-3"> Nsansa Wellness </span> 
                    </a>
                    <div class="my-auto">
                        {{-- <img class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg"> --}}
                        <div class="-intro-x text-primary font-bold text-5xl leading-tight mt-5">
                            Create your account
                        </div>
                        @if(request()->get('role') != 'patient')
                        <small class="-intro-x text-lg text-info text-opacity-70 dark:text-slate-400">
                            Private practice with no doors & no overhead.
                        </small>
                        @else
                        <small class="-intro-x text-lg text-success text-opacity-70 dark:text-slate-400">
                            Join online therapy with a licensed therapist
                        </small>
                        @endif
                    </div>
                </div>
                <!-- END: Register Info -->
                <!-- BEGIN: Register Form -->
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div style="box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px;" class="lg:mt-5 mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 px-5 sm:px-8 py-8 xl:p-4 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                         <h6 class="intro-x text-default text-xs xl:text-sm text-center xl:text-left">
                            Fill up all the Application Form
                        </h6> 
                        
                        @if(session('message'))
                            <span class="invalid-feedback text-red-500 flex mt-2" role="alert">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                                        <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                                    </svg>
                                </span>
                                <strong>{{ session('message')}}</strong>
                            </span>
                            @endif 
                        @error('email')
                            <span class="invalid-feedback text-red-500 flex mt-2" role="alert">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                                        <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                                    </svg>
                                </span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror     
                        @error('password')
                            <span class="invalid-feedback text-red-500 flex mt-2" role="alert">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                                        <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9c-1.14 0-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                                    </svg>
                                </span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{--
                        <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">Thank you for your interest! Please create your <span class="text-success">{{ $role ?? 'therapist' }}</span> account so we can start processing your application.</div> --}}
                        <div class="intro-x mt-8">
                            <div class="flex gap-2">
                                <input type="text" id="fname" name="fname" class="intro-x login__input form-control py-3 px-4 block" placeholder="First Name">
    
                                <input type="text" id="lname" name="lname" class="intro-x login__input form-control py-3 px-4 block" placeholder="Last Name">
                            </div>
                            @if(request()->get('role') != 'patient')
                            <input type="hidden" id="type" name="type" value="counsellor">
                            @else
                            <input type="hidden" id="type" name="type" value="patient">
                            @endif
                            <input type="hidden" id="role" name="role" value="{{ request()->get('role') }}">
                            <input type="hidden" name="guest_id" value="{{ request()->get('guest_id') }}">
                            @if (request()->get('role') != 'patient')
                            {{-- <input type="text" id="liecense" name="liecense" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Liecense"> --}}
                            @endif
                            <input type="email" id="email" @error('email') is-invalid @enderror name="email" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email Address">

                            <input type="password"  @error('password') is-invalid @enderror id="password" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                            
                            {{-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div id="firstrule" class="col-span-3 h-full rounded"></div>
                                <div id="secondrule" class="col-span-3 h-full rounded"></div>
                                <div id="thirdrule" class="col-span-3 h-full rounded"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div> --}}
                            <div id="password-feedback" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm"></div> 
                            <input type="password" id="password-confirm" name="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password Confirmation">
                            
                            {{-- Uploads --}}
                            @if (request()->get('role') != 'patient')
                            <div class="flex py-2 gap-2">
                                <div class="file-input-container">
                                    <input type="file" class="file-input" name="nrc_doc" id="nrc_doc">
                                    <button class="file-input-button-1" type="button">NRC Document</button>
                                </div> 
                                <div class="file-input-container">
                                    <input type="file" class="file-input" name="cv_doc" id="cv_doc">
                                    <button class="file-input-button-2" type="button">C.V Document</button>
                                </div> 
                                {{-- <div class="file-input-container">
                                    <input type="file" class="file-input" name="license_doc" id="license_doc">
                                    <button class="file-input-button-3" type="button">License Document</button>
                                </div>  --}}
                                <div class="file-input-container">
                                    <input type="file" class="file-input" name="cert_doc" id="cert_doc">
                                    <button class="file-input-button-4" type="button">License or Certificate Document</button>
                                </div>  
                            </div>
                            @endif
                        </div>
                        <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Nsansa Wellness</label>
                            <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>. 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">
                                Register
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary py-3 px-1 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign In</a>
                        </div>
                    </div>
                </form>
                <!-- END: Register Form -->
            </div>
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#password').on('input', function() {
                var password = $(this).val();
                var hasSymbol = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password);
                var hasCapital = /[A-Z]/.test(password);
                var hasNumber = /[0-9]/.test(password);
                
                var feedback = '';
                
                if (!hasSymbol) {
                    feedback += 'Password must have at least one symbol (!@#$%^&*?).<br>';
                }else{
                    // $('#thirdrule').addClass('bg-success');
                }
                
                if (!hasCapital) {
                    feedback += 'Password must have at least one capital letter.<br>';
                }else{
                    // $('#firstrule').addClass('bg-success');
                }
                
                if (!hasNumber) {
                    feedback += 'Password must have at least one number.<br>';
                }else{
                    // $('#secondrule').addClass('bg-success');
                }
                
                $('#password-feedback').html(feedback);
            });


            $('#nrc_doc').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('.file-input-button-1').text('Done');
                // $('.file-input-button-1').b
            });

            $('#cv_doc').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('.file-input-button-2').text('Done');
            });

            $('#cert_doc').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('.file-input-button-4').text('Done');
            });

            $('#license_doc').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('.file-input-button-3').text('Done');
            });
        });
        </script>
    </body>
</html>