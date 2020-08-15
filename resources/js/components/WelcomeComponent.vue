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
                                    <h1 class="hero-title">Free Paid Courses.<br></h1>
                                    <p class="lead hero-subtitle" style="background-color: rgb(3,11,82);opacity: 0.36;"><br>We Help the One who cant afford Paid Courses. We Post Courses Here for free together with their coupons so that one can enroll in to the course easily. All you do is to click the link and you will get redirected<br></p>
                                    <p><button class="btn btn-primary text-center border rounded hero-button" type="button" style="background-color: rgb(3,11,82);">Try Out<i class="fa fa-chevron-circle-right" style="margin-right: 5px;padding-left: 10px;"></i></button></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="jumbotron hero-photography carousel-hero">
                                    <h1 class="hero-title">Learn The Art&nbsp;</h1>
                                    <p class="hero-subtitle">With the courses, you get to learn the technical skills to be applied in the real world. An example is Photography,&nbsp;</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="jumbotron hero-technology carousel-hero">
                                    <h1 class="hero-title">Readily Accessible</h1>
                                    <p class="hero-subtitle">The courses will be readily accessible from any device you are viewing in from.</p>
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
                    <div class="col-md-6"><img class="img-thumbnail rubberBand animated" :src="course.CourseBanner"></div>
                    <div class="col-md-6">
                        <h3>{{course.CourseTitle}}</h3>
                        <div class="getting-started-info">
                            <p style="color: rgb(13,13,13);">jjj</p>
                        </div><button class="btn btn-outline-primary btn-lg" type="button">Check Out The Course{{course.Students}}}</button></div>
                </div>
            </div>
            <div></div>
        </section>
        <section class="clean-block features">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Our Team</h2>
                    <p style="color: rgb(13,13,13);">We work with a dedicated team who will always post the courses and the coupons any time. We work around the clock to make sure that you got what you need.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Top Rated Content</h4>
                        <p style="color: rgb(13,13,13);">We offer the Best and top rated courses in e-learning platforms.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="fas fa-credit-card icon"></i>
                        <h4>Free of Charge</h4>
                        <p style="color: rgb(13,13,13);">We provide the courses for free. Beware of anyone who ask you for money to give you any course coupon</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="typcn typcn-device-phone icon"></i>
                        <h4>Responsive Design</h4>
                        <p style="color: rgb(13,13,13);">Our Site Is mainly build with a responsivedesign to make sure that the site will always offer best experienceto users using any device to browse through our site</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>All Browser Compatibility</h4>
                        <p style="color: rgb(13,13,13);">We use the latest technology to make sure that our site is compatible with all the browsers. If Any Issue on Browser Compatibility,Contact Us</p>
                    </div>
                </div>
            </div>
            <!-- Start: About Us -->
            <section class="clean-block about-us">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info" style="font-weight: bold;">Top Rated Courses</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar1.jpg?h=2bf47f2c2deaed837d2490a2db0a7175">
                                <div class="card-body info">
                                    <h4 class="card-title">John Smith</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><button class="btn btn-primary" type="button">Learn More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar2.jpg?h=4178f5c706118a93c77520b6d0b30713">
                                <div class="card-body info">
                                    <h4 class="card-title">Robert Downturn</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><button class="btn btn-primary" type="button">Learn More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg?h=4c77b34bb68eaede08fdd5dfec8752b0">
                                <div class="card-body info">
                                    <h4 class="card-title">Ally Sanders</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p><button class="btn btn-primary" type="button">Learn More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Our Blog</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/scenery/image6.jpg?h=26f762ae21fd9cce95e86763ac6154ca">
                                <div class="card-body info">
                                    <p class="card-text" style="color: rgb(13,13,13);">Apple wins Big from ...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/image4.jpg?h=0adc0de9a17a7caea6b8641f5d6ae02c">
                                <div class="card-body info">
                                    <p class="card-text" style="color: rgb(13,13,13);">Apart fromFree Courses...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg?h=4c77b34bb68eaede08fdd5dfec8752b0">
                                <div class="card-body info">
                                    <p class="card-text" style="color: rgb(13,13,13);">The rollOver ...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <section></section>
                <div class="row" style="margin-top: 30px;margin-bottom: -60px;">
                    <div class="col">
                        <h1 class="display-4 text-monospace text-uppercase text-center d-block float-none">Latest courses</h1>
                    </div>
                </div>
                <div></div>
            </section>
            <!-- End: About Us -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/image4.jpg?h=0adc0de9a17a7caea6b8641f5d6ae02c">
                            <div class="card-body info">
                                <p class="card-text" style="color: rgb(13,13,13);">Apart fromFree Courses...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/image4.jpg?h=0adc0de9a17a7caea6b8641f5d6ae02c">
                            <div class="card-body info">
                                <p class="card-text" style="color: rgb(13,13,13);">Apart fromFree Courses...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/tech/image4.jpg?h=0adc0de9a17a7caea6b8641f5d6ae02c">
                            <div class="card-body info">
                                <p class="card-text" style="color: rgb(13,13,13);">Apart fromFree Courses...</p><button class="btn btn-primary" type="button">Read More<i class="fa fa-chevron-right" style="margin-left: 10px;"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start: Testimonial Slider 9 --><!-- Paradise Slider -->
	<div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

		<!-- Header of Slider -->
		<div class="testimonial_095_header">
			<h5>what people<span>say</span></h5>
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
					<a href="#"><span class="fa fa-twitter"></span></a>
					<p>Lorem ipsum dolor sit amet <a href="#">@consectetuer</a> adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h5><a href="#">name of consumer</a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of First Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="#"><span class="fa fa-twitter"></span></a>
					<p>Lorem ipsum dolor sit amet <a href="#">@consectetuer</a> adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h5><a href="#">name of consumer</a></h5>
				</div> <!-- /Text Layer -->
			</div> <!-- /item -->
			<!-- End of Second Slide -->
			
			<!-- Third Slide -->
			<div class="carousel-item">
				<!-- Text Layer -->
				<div class="testimonial_095_slide">
					<a href="#"><span class="fa fa-twitter"></span></a>
					<p>Lorem ipsum dolor sit amet <a href="#">@consectetuer</a> adipiscing elit am nibh unc varius facilisis eros ed erat in in velit quis arcu ornare laoreet urabitur.</p>
					<h5><a href="#">name of consumer</a></h5>
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
            course:[]
        }
    },
    methods:{
        loadTop(){
            axios.get('/Top/Rated').then((response)=>{
                this.course=response.data.course[0]
            })
        }
    },
    created(){
      this.loadTop()
    }
}
</script>