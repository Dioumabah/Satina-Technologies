<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>{{page_title($title ?? '')}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/bmd.min.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{asset('images/loader.gif')}}" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    @include('layouts.partials._nav')

    @yield('content')

    <br><br>

    @include('layouts.partials._footer')

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© {{NOW()->format('Y')}} SATINA Technologies . All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        <li><a href="{{ route('about_path')}}">About Us</a></li>
                        <li><a href="#">Find jobs</a></li>
                        <li><a href="{{ route('contact_path')}}">Contact us</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('js/slider-index.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/form-validator.min.js')}}"></script>
    <script src="{{asset('js/contact-form-script.js')}}"></script>
    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/images-loded.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/facture.js')}}"></script>

    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/bmd.dataTables.js') }}"></script>
    <script  src=" {{asset('js/bmd.js')}}"></script>
</body>
</html>
