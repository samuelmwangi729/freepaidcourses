<template>
    <main class="page landing-page">
        <section class="clean-block clean-info dark">
            <div class="container-fluid">
                <div class="text-center block-heading" style="margin-top: -50px;">
                    <!-- Start: Carousel Hero -->
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="jumbotron hero-nature carousel-hero">
                                    <h1 class="hero-title" style="color:black">Free Paid Courses.<br></h1>
                                    <p class="lead hero-subtitle" style="background-color: rgb(3,11,82);opacity: 0.36;"><br>We Help the One who cant afford Paid Courses. We Post Courses Here for free together with their coupons so that one can enroll in to the course easily. All you do is to click the link and you will get redirected<br></p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="jumbotron hero-photography carousel-hero">
                                    <h1 class="hero-title" style="color:black">Learn The Art&nbsp;</h1>
                                    <p class="hero-subtitle" style="background-color:black;font-size:20px">With the courses, you get to learn the technical skills to be applied in the real world. An example is Photography,&nbsp;</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="jumbotron hero-technology carousel-hero">
                                    <h1 class="hero-title" style="color:black">Readily Accessible</h1>
                                    <p class="hero-subtitle" style="background-color: black;font-size:20px">The courses will be readily accessible from any device you are viewing in from.</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                        <ol
                            class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                            </ol>
                    </div>
                    <!-- End: Carousel Hero -->
                    <h2 class="text-info" style="margin-top: 20px;font-weight: bold;">Top Rated Course</h2>
                    <p style="color: rgb(13,13,13);">This is the course with the most number of students enrolled and with a lot of positive feedbacks</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail rubberBand animated" :src="course.CourseBanner" width="100%"></div>
                    <div class="col-md-6">
                        <h3 style="color:red;font-weight:bold">{{course.CourseTitle}}</h3>
                        <div class="getting-started-info" style="background-color:black;opacity:.5">
                            <p style="padding-left:30px" v-html="course.Prerequisites">
                            </p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button" @click="viewCourse(course.id)">Check Out The Course</button></div>
                </div>
            </div>
            <div></div>
        </section>
        <section class="clean-block features">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Our Team</h2>
                    <p style="color: rgb(13,13,13);">We are a dedicated team of Developers who
                         will always post the courses and the coupons any time. We work around the
                         clock to make sure that you got what you need.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box card" style="margin-right:20px">
                        <h4 style="color:purple">Top Rated Content</h4>
                        <p style="color: rgb(13,13,13);">We offer the Best and top rated courses in e-learning platforms.</p>
                    </div>
                    <div class="col-md-5 feature-box card">
                          <h4 style="color:purple">Free of Charge</h4>
                        <p style="color: rgb(13,13,13);">We provide the courses for free. Beware of anyone who ask you for money to give you any course coupon</p>
                    </div>
                    <div class="col-md-5 feature-box card" style="margin-right:20px">
                         <h4 style="color:purple">Responsive Design</h4>
                        <p style="color: rgb(13,13,13);">Our Site Is mainly build with a responsivedesign to make sure that the site will always offer best experienceto users using any device to browse through our site</p>
                    </div>
                    <div class="col-md-5 feature-box card">
                         <h4 style="color:purple">All Browser Compatibility</h4>
                        <p style="color: rgb(13,13,13);">We use the latest technology to make sure that our site is compatible with all the browsers. If Any Issue on Browser Compatibility,Contact Us</p>
                    </div>
                </div>
            </div>
            <!-- Start: About Us -->
            <!-- Start: Testimonial Slider 9 --><!-- Paradise Slider -->
	<div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<!-- Header of Slider -->
		<div class="testimonial_095_header">
			<h5>what people<span>say About Us</span></h5>
		</div>
		<!-- /Header of Slider -->

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
			<li data-target="#testimonial_095" data-slide-to="1"></li>
			<li data-target="#testimonial_095" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="#"><span class="fa fa-user"></span></a>
					<p>Best Provider Ever <a href="#">@freepaidcourses</a> is surely here to help. I will surely support then no matter what</p>
					<h5><a href="#">Benson</a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of First Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="#"><span class="fa fa-user"></span></a>
					<p>With the change in Tech trends, I find  <a href="#">@freepaidcourses</a> best provider of online resources for free. I highly Recommend Them.</p>
					<h5><a href="#">Taylor Lawson</a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of Second Slide -->

			<!-- Third Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="#"><span class="fa fa-user"></span></a>
					<p>To Us, who are strugling to study for free, i personally find <a href="#">@freepaidcourses</a> as the only platform ready to help us by providing the resources for free without any charges. We will surely  support this platform</p>
					<h5><a href="#">Kelvin Brown</a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of Third Slide -->

		</div> <!-- End of Wrapper For Slides -->

		<!-- Left Control -->
		<a class="carousel-control-prev" href="#testimonial_095" data-slide="prev">
			<span class="fa fa-chevron-left"></span>
		</a>

		<!-- Right Control -->
		<a class="carousel-control-next" href="#testimonial_095" data-slide="next">
			<span class="fa fa-chevron-right"></span>
		</a>

	</div> <!-- End Paradise Slider -->
 <!-- End -->
<!-- End: Testimonial Slider 9 -->
        </section>
    </main>
</template>
<script>
export default{
    data(){
        return{
            course:[],
            topRated:[],
            blogs:[],
            hacks:[]
        }
    },
    methods:{
        getBlogs(){
            axios.get('http://127.0.0.1:8000/welcome/blogs').then((response)=>{
                this.blogs=response.data
                console.log(response.data)
            })
        },
        getBlogs(){
            axios.get('/welcome/hacks').then((response)=>{
                this.hacks=response.data
            })
        },
        loadTop(){
            axios.get('/Top/Rated').then((response)=>{
                this.course=response.data.course[0]
            })
        },
        viewCourse(id){
            axios.post('vCj1lBA/5D7xhyuEFuIAwabFNqgR',{
                id:id
            }).then((data)=>{
                window.open('/Course/'+data.data.course.slug,'_parent');
                //open a new window
            })
            //post the id and save the details into a session variable
        },
        TopRated(){
            axios.get('/ZM1LDQPNwhQ1wRDEpn5oe').then((response)=>{
                this.topRated=response.data.courses
                console.log(this.topRated)
            }).catch((error)=>{
                console.log(err)
            })
        }
    },
    created(){
      this.loadTop()
      this.TopRated()
      this.getBlogs()
    }
}
</script>
