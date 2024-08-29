@extends('layouts.master2')
@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{ URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="{{ URL::asset('assets/img/media/login.png') }}"
                            class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="{{ url('/' . ($page = 'index')) }}"><img
                                                src="{{ URL::asset('assets/img/brand/favicon.png') }}"
                                                class="sign-favicon ht-40" alt="logo"></a>
                                        <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1>
                                    </div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2>Welcome back!</h2>
                                            <h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                                            <form id="loginForm" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <!-- Email Address -->

                                                <div class="form-group">
                                                    <label>Email</label> <input name="email" class="form-control"
                                                        placeholder="Enter your email" type="text"
                                                        value="{{ old('email') }}">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    {{-- for js code --}}
                                                    <span class="error-message text-danger" id="emailError"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label> <input name="password" class="form-control"
                                                        placeholder="Enter your password" type="password">
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    {{-- for js code --}}
                                                    <span class="error-message text-danger" id="passwordError"></span>
                                                </div><button type="submit" class="btn btn-main-primary btn-block">Sign
                                                    In</button>
                                                <div class="row row-xs">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-block"><i class="fab fa-facebook-f"></i>
                                                            Signup with Facebook</button>
                                                    </div>
                                                    <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                        <button class="btn btn-info btn-block"><i
                                                                class="fab fa-twitter"></i> Signup with Twitter</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="main-signin-footer mt-5">
                                                <p><a href="">Forgot password?</a></p>
                                                <p>Don't have an account? <a
                                                        href="{{ url('/' . ($page = 'signup')) }}">Create
                                                        an Account</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
@endsection
@section('js')
    {{-- js code to prevent to send request it there error on data --}}
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let isValid = true;
            const email = document.querySelector('input[name="email"]');
            const password = document.querySelector('input[name="password"]');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');

            // Reset errors
            emailError.textContent = '';
            passwordError.textContent = '';

            // Email validation
            if (!email.value) {
                emailError.textContent = 'Email is required.';
                isValid = false;
            } else if (!/\S+@\S+\.\S+/.test(email.value)) {
                emailError.textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            // Password validation
            if (!password.value) {
                passwordError.textContent = 'Password is required.';
                isValid = false;
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();

                setTimeout(() => {
                emailError.textContent = '';
                passwordError.textContent = '';
            }, 3000); // 3000 milliseconds = 3 seconds
            }
        });
    </script>
@endsection
