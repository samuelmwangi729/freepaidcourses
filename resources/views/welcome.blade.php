@include('layouts.nav')
  </div>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" height="500px" width="100%">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" height="500px" width="100%">
  
        <div class="container">
          <div class="carousel-caption">
            <h1 style="background-color:black;opacity:.8;color:white;font-weight:bold">Another example headline.</h1>
            <p style="background-color:white;opacity:.6;color:black;font-weight:bold">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" height="500px" width="100%">
  
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
        <h2>Instant Access</h2>
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
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card  mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/625204_436a_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Web Developer BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>the Pirate</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.7</b><i style="font-size:10px">(14,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/950390_270f_3.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Machine Learning BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/756150_c033_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Angular BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
        
    </div>
    <!--end row-->
  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <h2 class="text-center" style="font-weight:bold">Featured Uploads</h2>
    <div class="row">
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card  mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/625204_436a_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Web Developer BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>the Pirate</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.7</b><i style="font-size:10px">(14,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/950390_270f_3.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Machine Learning BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/756150_c033_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Angular BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
        
    </div>
    <!--end row-->
  
    <hr class="featurette-divider">
  
    <!-- /END THE FEATURETTES -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <h2 class="text-center" style="font-weight:bold">Latest Uploads</h2>
    <div class="row">
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/567828_67d0.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Python BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card  mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/625204_436a_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Web Developer BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>the Pirate</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.7</b><i style="font-size:10px">(14,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/950390_270f_3.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Machine Learning BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
      <div class="col-sm-3">
        <div class="card mb-3" style="max-width: 18rem;box-shadow: 5px 5px #e7e7e7;">
         <a href="#">
          <div class="card-header bg-transparent">
            <img src="https://img-a.udemycdn.com/course/240x135/756150_c033_2.jpg">
          </div>
          <div class="card-body">
            <h6 class="card-title" style="font-weight:bold;font-size:13px">Complete Angular BootCamp</h6>
            <p class="card-text">
              <address style="font-size:12px">
              <i>Samuel Mwangi</i>
              </address>
              <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </span> <b>4.5</b><i style="font-size:10px">(145,000 students)</i>
            </p>
          </div>
        </div>
         </a>
      </div>  
      <!--end col-->  
        
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