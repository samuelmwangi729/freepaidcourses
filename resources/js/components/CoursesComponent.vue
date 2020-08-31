<template>
  <section class="clean-block clean-catalog dark">
      <div class="row">
          <div class="col">
              <!-- Start: best carousel slide -->
              <section id="carousel">
                  <!-- Start: Carousel Hero -->
                  <div class="carousel slide" data-ride="carousel" id="carousel-1">
                      <div class="carousel-inner" role="listbox">
                          <div class="carousel-item">
                              <div class="jumbotron pulse animated hero-nature carousel-hero">
                                  <h1 class="hero-title">Hero Nature</h1>
                                  <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                  <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                              </div>
                          </div>
                          <div class="carousel-item">
                              <div class="jumbotron pulse animated hero-photography carousel-hero">
                                  <h1 class="hero-title">Hero Photography</h1>
                                  <p class="hero-subtitle">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                  <p><a class="btn btn-primary hero-button plat" role="button" href="#">Learn more</a></p>
                              </div>
                          </div>
                          <div class="carousel-item active">
                              <div class="jumbotron text-white pulse animated hero-technology carousel-hero">
                                  <h1 class="shadow-lg hero-title">Study Anywhere</h1>
                                  <p class="hero-subtitle">With the coupons we provide to you, it is now possibleto study from anywhere as long as you have internet connection.</p>
                                  <p><a class="btn btn-primary btn-lg text-center text-dark bg-success border rounded border-success hero-button plat" role="button" href="#" target="_parent">Explore Courses</a></p>
                              </div>
                          </div>
                      </div>
                      <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                              data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-1" data-slide-to="0"></li>
                          <li data-target="#carousel-1" data-slide-to="1"></li>
                          <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
                      </ol>
                  </div>
                  <!-- End: Carousel Hero -->
              </section>
              <!-- End: best carousel slide -->
          </div>
      </div>
      <div class="row-fluid" style="margin-top:40px">
          <!-- Start: Bold BS4 Jumbotron with Particles js -->
          <div class="jumbotron jumbotron-fluid jumbotron-main">
                <div id="particles-js">
              <canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
              </div>
              <div class="container center-vertically-holder" style="margin-top:-20px;">
                  <div class="row center-vertically">
                      <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                          <h1>We give you the freedom to choose what you want.Make a wise Decision</h1>
                          <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End: Bold BS4 Jumbotron with Particles js -->
          <div class="block-heading" style="margin-top: 40px;">
              <h2 class="text-info" style="font-weight: bold;">Available Courses</h2>
          </div>
          <div class="content">
              <div class="row">
                  <div class="col-md-3">
                      <div class="d-none d-md-block">
                          <div class="filters">
                                <h3 style="color: red;">Categories</h3>
                              <div class="filter-item">
                                  <div class="form-check"  v-for="item in menus" :key="item.id">
                                      <input class="form-check-input" type="checkbox" id="formCheck-5" @click="getCourse(item.id)">
                                      <label class="form-check-label" for="formCheck-1" style="font-weight: bold;font-size: 13px;" @click="getCourse(item.id)">{{item.Name}}</label>
                                    </div>
                              </div>
                              <div class="filter-item">
                                  <h3 style="color: red;">Top Rated</h3>
                                  <div class="form-check" v-for="item in topRated" :key="item.id">
                                      <input class="form-check-input" type="checkbox" id="formCheck-5" @click="viewCourse(item.id)">
                                      <label class="form-check-label" for="formCheck-5" style="font-weight: bold;font-size: 11px;" @click="viewCourse(item.id)">{{item.CourseTitle}}</label>
                                </div>
                              </div>
                              <div class="filter-item">
                                  <h3 style="color: red;">Highly Viewed</h3>
                                  <div class="form-check" v-for="item in highly" :key="item.id">
                                        <input class="form-check-input" type="checkbox" id="formCheck-5" @click="viewCourse(item.id)">
                                        <label class="form-check-label" for="formCheck-5" style="font-weight: bold;font-size: 11px;" @click="viewCourse(item.id)">{{item.CourseTitle}}</label>
                                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                          <div class="collapse"
                              id="filters">
                              <div class="filters">
                                  <div class="filter-item">
                                      <h3 style="color: red;">Categories</h3>
                                       <div class="form-check"  v-for="item in menus" :key="item.id" @click="getCourse(item.id)">
                                      <label class="form-check-label" for="formCheck-1" style="font-weight: bold;font-size: 13px;">{{item.Name}}</label>
                                    </div>
                                  </div>
                                    <div class="filter-item">
                                        <h3 style="color: red;">Top Rated</h3>
                                        <div class="form-check" v-for="item in topRated" :key="item.id" @click="viewCourse(item.id)">
                                        <label class="form-check-label" for="formCheck-5" style="font-weight: bold;font-size: 11px;">{{item.CourseTitle}}</label>
                                    </div>
                              </div>
                              <div class="filter-item">
                                  <h3 style="color: red;">Highly Viewed</h3>
                                   <div class="form-check" v-for="item in highly" :key="item.id" @click="viewCourse(item.id)">
                                        <label class="form-check-label" for="formCheck-5" style="font-weight: bold;font-size: 11px;" @click="viewCourse(item.id)">{{item.CourseTitle}}</label>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-9">
                  <div class="products">
                      <div class="row no-gutters">
                          <div class="col-12 col-md-6 col-lg-4" v-for="course in courses" :key="course.id">
                              <div class="clean-product-item">
                                  <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" :src="course.CourseBanner" width="100%"></a></div>
                                  <div class="product-name"><a href="#">{{course.CourseTitle}}</a></div>
                                  <b style="font-size:10px;font-weight:bold">Instructor :{{ course.Instructor }}</b> &nbsp;<b style="font-size:10px;font-weight:bold"> {{ course.Students }}  Students Enrolled</b>
                                  <div class="about">

                                      <div class="rating">
                                           <span v-if="course.Rating==1" style="color:gold">
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span v-if="course.Rating==2" style="color:gold">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span v-if="course.Rating==3" style="color:gold">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span v-if="course.Rating==4" style="color:gold">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <span v-if="course.Rating==5" style="color:gold">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                      </div>
                                      <div class="price">
                                          <h3><button class="btn btn-danger" @click="viewCourse(course.id)">View Course</button></h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>
</template>
<script>
export default{
    data(){
        return{
            courses:[],
            menus:[],
            topRated:[],
            highly:[]
        }
    },
    methods:{
        loadCourses(){
            axios.get('/3fb3I6D1Nfyu7t3jSV3RB74').then((data)=>{
                this.courses=data.data.courses
            })
        },
       viewCourse(id){
            axios.post('/vCj1lBA/5D7xhyuEFuIAwabFNqgR',{
                id:id
            }).then((data)=>{
                window.open('/Course/'+data.data.course.slug,'_parent');
                //open a new window
            })
            //post the id and save the details into a session variable
        },
        loadMenus(){
            axios.get('/NtEeRAZWyEkd6QBNQNphgf7').then((response)=>{
                this.menus=response.data.menus;
            })
        },
        TopRated(){
            axios.get('/QNphgf7gGV6qEoh7g').then((response)=>{
                this.topRated=response.data
            })
        },
        LoadHighly(){
            axios.get('/FWfROKZ6S84tBlJxm9iX0tLfoz').then((response)=>{
                this.highly=response.data.courses
            })
        },
        getCourse(id){
            //get the courses from the categories id posted
            axios.get('/bz77CIjJaY2B8Soi/'+id).then((response)=>{
                this.courses=response.data.courses
            })
        }
    },
    created(){
        this.LoadHighly()
        this.loadCourses()
        this.TopRated()
        this.loadMenus()
    }
}
</script>
