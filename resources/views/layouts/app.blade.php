<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="We offer Paid Courses for Free. We Also have a platform where we will be submitting the source codes and maybe later we will be ready to sell them to clients. 
    Udemy Coupons are the one we predominantly Deal With.">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css?h=8ec56c10f640e423d1cb9904ab041659') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
        <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css?h=18313f04cea0e078412a028c5361bd4e') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css?h=5000420eb2b2037ddbbdb385b3c90c87') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container-fluid"><a class="navbar-brand logo" href="/">FreePaidCourses</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ route('courses') }}">Courses</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('techs') }}">Tech Hacks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('cracks') }}">Cracks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('AboutUs') }}">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                    </ul><button class="btn btn-primary" type="button">Join Us&nbsp;&nbsp;<i class="fa fa-telegram"></i></button></div>
            </div>
        </nav>
        @yield('content')
    </div>
    <footer class="page-footer dark" style="margin-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 | All Rights Reserved | Free Paid Courses</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js?h=3f4b3a30c7029ccb9685fa2dae9293eb') }}"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
            <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
            <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
