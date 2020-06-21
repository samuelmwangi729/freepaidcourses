@include('layouts.nav')
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  
  <div class="container-fluid" style="padding-top:20px">  
    <div class="row">
        <div class="col-sm-9">
            <h2 class="text-center" style="font-weight:bold">Categories</h2>
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
                          </span> <b>{{ $course->Rating }}</b> Star <i style="font-size:10px">({{ $course->Students }} students)</i>
                        </p>
                      </div>
                    </div>
                     </a>
                  </div>  
                  <!--end col-->  
                @endforeach
              </div>
        </div>
        <div class="col-sm-3">
            <h2 class="text-center" style="font-weight:bold;font-size:12px">Courses</h2>
            <hr class="featurette-divider">
           <ul class="input-group">
            @foreach($courses as $course)
            <a href="{{ route('Course',[$course->slug]) }}" style="color:black;text-decoration:none;cursor:pointer;font-size:10px;font-weight:bold">
            <li class="list-group-item">
              {{$course->CourseTitle}}
              </li>
           </a>
            @endforeach
           </ul>
        </div>
    </div>
    <!--end row-->
  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
  
  </div><!-- /.container -->
  
@include('layouts.footer')