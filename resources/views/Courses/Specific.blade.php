@include('layouts.nav')
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
  <div class="container-fluid" style="padding-top:20px">  
    <div class="row">
        <div class="col-sm-9">
          <div class="sharethis-inline-share-buttons"></div>
            <h2 class="text-center" style="font-weight:bold">{{ $course->CourseTitle }}</h2>
           <h2 class="text-center"> <img src="{{ $course->CourseBanner }}" width="50%"></h2>
           <h6 class="text-center">
            Category: {{ $course->Category }} &nbsp; Rating <span>
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
                @endif
               </span><b>{{ $course->Rating }}</b> Star Rating <i style="font-size:15px">({{ $course->Students }} students Enrolled)</i><br>
           </h6>
           <h5 class="text-center" style="color:red">Created By : {{ $course->Instructor }}</h5>
           <div class="card card-header">
            {!! $course->Prerequisites !!}
            {!! $course->Description !!}
           </div>
           <h5 class="text-center" style="margin-top:20px">
            <a href="{{ $course->CourseLink  }}" class="btn btn-danger" target="_blank">Enroll Now</a>
           </h5>
           <h2 class="text-center">Leave Your Feedback</h2>
           <div class="sharethis-inline-reaction-buttons"></div>
        </div>
        <div class="col-sm-3">
            <h2 class="text-center" style="font-weight:bold;font-size:12px">Courses</h2>
            <hr class="featurette-divider">
            <ul class="list-group">
              @foreach($courses as $singleCourse)
              <a href="{{ route('Course',[$singleCourse->slug]) }}" style="color:black;text-decoration:none;cursor:pointer">
                <li class="list-group-item" style="font-size:10px;font-weight:bold">{{ $singleCourse->CourseTitle }}</li>
               </a>
              @endforeach
            </ul>
        </div>
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