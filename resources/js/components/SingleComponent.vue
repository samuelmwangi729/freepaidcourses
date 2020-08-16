<template>
    <div class="container-fluid" style="margin-top:70px">
                    <!-- Start: Bold BS4 Jumbotron with Particles js -->
        <div class="jumbotron jumbotron-fluid jumbotron-main">
            <div id="particles-js">
            <canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="container center-vertically-holder" style="margin-top:-20px;">
                <div class="row center-vertically">
                    <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                        <h1>{{course.CourseTitle}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Bold BS4 Jumbotron with Particles js -->
        <div class="row" style="margin-top:20px">
            <div class="col-sm-7" style="background-color:#ef9797">
             <img class="img-thumbnail rubberBand animated" :src="course.CourseBanner" width="100%">
             <span v-html="course.Description"> </span>
            </div>
            <div class="col-sm-5">
             <span v-html="course.Prerequisites" style="color:black !important"></span>
                    Instructor:   {{ course.Instructor }}&nbsp;
                    Students:   {{ course.Students }}
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
                      ({{ course.Rating }} Star) Rating
                      <div class="row">
                          <div class="col-sm-6 offset-sm-4">
                              <button class="btn btn-danger" @click="viewCourse(course.CourseLink)">
                                  Preview Course
                              </button>
                          </div>
                      </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        return{
            course:[]
        }
    },
    methods:{
        loadCourse(){
            axios.get('/PY7Ux7bqLcOYSET').then((response)=>{
                this.course=response.data.course
            })
        },
        viewCourse(link){
           let ans=confirm('You will be redirected from '+ document.domain)
           if(ans){
                window.open(link,'_blank');
           }
           
        }
    },
    created(){
        console.log('loading course')
        this.loadCourse()
    }
}
</script>