{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}
<!doctype html>
<html lang="zxx" class="theme-light">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/viewer.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">

        <title>Joome Support- Computer,Music & Sports</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/partner/11.png')}}">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Login Area -->
        <section class="login-area">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-image">
                        <img src="{{ asset('assets\img\mine\tg12.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="login-form">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('assets/img/partner/11.png')}}" class="black-logo" alt="image"></a>
                                        <a href="index.html"><img src="{{ asset('assets/img/partner/11.png')}}" class="white-logo" alt="image"></a>
                                    </div>

                                    <h3>Welcome back</h3>
                                    <p>New to Joome Support Organization? <a href="register.html"><span style="color: blue;;">Sign up</span></a></p>

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" placeholder="Your email address" class="form-control" name="email" :value="old('email')" required>
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="Your password" class="form-control"  name="password" required autocomplete="current-password">
                                        </div>

                                        <button type="submit">Login</button>
                                        <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mt-4">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                                    <label class="form-check-label" for="create-an-account">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="forgot-password">
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                        <div class="connect-with-social">
                                            <button type="submit" class="facebook"><i class='bx bxl-facebook'></i> Connect with Facebook</button>
                                            <button type="submit" class="twitter"><i class='bx bxl-twitter'></i> Connect with Twitter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

        <!-- Dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- Dark version -->

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/mixitup.min.js')}}"></script>
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{ asset('assets/js/particles.min.js')}}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/viewer.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
</html>
