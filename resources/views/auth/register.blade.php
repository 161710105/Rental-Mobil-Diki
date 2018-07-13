@extends('layouts.app')

@section('content')
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/assets/frontend/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/assets/frontend/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/assets/frontend/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/frontend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/assets/frontend/css/theme.css')}}" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
<div class="container">
    <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('/assets/frontend/images/icon/logo.png')}}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="au-input au-input--full{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="au-input au-input--full{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="au-input au-input--full{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="au-input au-input--full" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery JS-->
    <script src="{{ asset('/assets/frontend/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/assets/frontend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/assets/frontend/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('/assets/frontend/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('/assets/frontend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('/assets/frontend/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('/assets/frontend/js/main.js')}}"></script>

</body>
@endsection
