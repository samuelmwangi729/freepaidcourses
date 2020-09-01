<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header')
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container-fluid"><a class="navbar-brand logo" href="/" style="text-shadow:1px 1px red,2px 2px blue;font-size:30px">
                <i class="fa fa-book-reader"></i>
                FPC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ route('courses') }}">Courses</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('techs') }}">Tech Hacks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('cracks') }}">Cracks</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('AboutUs') }}">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                    </ul><button class="btn btn-primary" type="button">Join Us&nbsp;&nbsp;<i class="fab fa-telegram"></i></button></div>
            </div>
        </nav>
        @yield('content')
    </div>
   @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
            <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
            <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
