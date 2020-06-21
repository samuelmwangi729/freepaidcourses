@include('layouts.nav')
<div class="sharethis-inline-follow-buttons"></div>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/247851/pexels-photo-247851.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="500px" width="100%">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Be Free of Worries</h1>
            <p style="background-color:black;opacity:.5">With our daily updates and free courses coupons from all e-learning platforms, you now have nothing to worry about</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/17663/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="500px" width="100%">
  
        <div class="container">
          <div class="carousel-caption">
            <h1 style="background-color:black;opacity:.8;color:white;font-weight:bold">Easy Access</h1>
            <p style="background-color:white;opacity:.6;color:black;font-weight:bold">We have optimized the site and designed it to be mobile  friendly fo fast and easy access</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.pixabay.com/photo/2017/07/21/23/57/concert-2527495_960_720.jpg" height="500px" width="100%">
  
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Cashless Learning.</h1>
            <p>We make it funny. Just be In touch with us,Subscribe to our Telegram Channel for timely Updates</p>
            <p><a class="btn btn-lg btn-primary" href="https://t.me/fcoursesudemy" target="_blank" role="button">Subscribe</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
  <div class="container-fluid" style="padding-top:20px">
  
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 text-center">
        <div style="background-color:black;">
          <i class="fa fa-user-graduate" style="font-size:140px;color:white;text-shadow: 2px 2px red"></i>
        </div>
        <h2>Students</h2>
        <p>{{ config('app.name') }} is devoted to help bridge the technologu gap between the market and the Tech. Come get it Guys</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <div style="background-color:red;">
          <i class="fa fa-history" style="font-size:140px;color:white;text-shadow: 2px 2px blue"></i>
        </div>
        <h2>Upto Date</h2>
        <p>You need the latest skills to do your job effectively.We give you access to skills that you need to excel</p> 
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 text-center">
        <div style="background-color:yellow">
          <i class="fa fa-tags rounded-circle" style="font-size:140px;color:green;text-shadow: 2px 2px red"></i>
        </div>
        <h2>Easy Access</h2>
        <p>Customize your team’s learning experience and drive your most important initiatives forward with our  services.</p> 
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  
  
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <h2 class="text-center" style="font-weight:bold">Top categories</h2>
    <div class="row">
      @foreach($top as $course)
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="{{ route('Course',[$course->slug]) }}">
          <div class="card-header bg-transparent">
            <img src="{{ $course->CourseBanner }}" width="100%">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">{{ $course->CourseTitle }}</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>{{ $course->Instructor }}</i>
              </address>
              <span>
               @if($course->Rating==1)
               <i class="fa fa-star" style="color:#f1c059"></i>
               @endif
               @if($course->Rating==2)
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               @endif
               @if($course->Rating==3)
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               @endif
               @if($course->Rating==4)
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               @endif
               @if($course->Rating==5)
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               <i class="fa fa-star" style="color:#f1c059"></i>
               @endif<br>
              </span> <b>{{ $course->Rating }}</b> Stars <i style="font-size:10px">({{ $course->Students }} students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      @endforeach        
    </div>
    <!--end row-->
  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <h2 class="text-center" style="font-weight:bold">Latest Uploads</h2>
    <div class="row">
     @foreach($courses as $course)
     <div class="col-sm-3">
      <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
       <a href="{{ route('Course',[$course->slug]) }}">
        <div class="card-header bg-transparent">
          <img src="{{ $course->CourseBanner }}" width="100%">
        </div>
        <div class="card-body">
          <h6 class="card-title" style="font-weight:bold;font-size:13px">{{ $course->CourseTitle }}</h6>
          <p class="card-text">
            <address style="font-size:12px">
            <i>{{ $course->Instructor }}</i>
            </address>
            <span>
             @if($course->Rating==1)
             <i class="fa fa-star" style="color:#f1c059"></i>
             @endif
             @if($course->Rating==2)
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             @endif
             @if($course->Rating==3)
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             @endif
             @if($course->Rating==4)
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             @endif
             @if($course->Rating==5)
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             <i class="fa fa-star" style="color:#f1c059"></i>
             @endif<br>
            </span> <b>{{ $course->Rating }}</b> Stars <i style="font-size:10px">({{ $course->Students }} students)</i>
          </p>
        </div>
      </div>
       </a>
    </div>  
     @endforeach       
    </div>
    <!--end row-->
  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
  
  </div><!-- /.container -->
  
  
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>
</html>