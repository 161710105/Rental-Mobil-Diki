<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Car Rental</title>

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
        <!-- HEADER DESKTOP-->
        @include('partials2.header-dekstop')
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        @include('partials2.header-mobile')
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        
            <!-- END WELCOME-->
            @yield('content')

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
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

</html>
<!-- end document-->