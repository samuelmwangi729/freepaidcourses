<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ courses }}</h3>

                        <p>Courses</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
            <div class="col-lg-3 col-6">
                 <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{hacks}}</h3>

                        <p>Tech Hacks</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-dark">
                    <div class="inner">
                        <h3>{{cracks}}</h3>

                        <p>S/W Cracks</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-lock-open"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ blogs }}</h3>

                        <p>Blogs</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe-americas"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{CatCrack}}</h3>

                        <p>Cracks Categories</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            <!--End Small-box-->
            </div>
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{CatTech}}</h3>

                        <p>Tech Categories</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-list"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{Messages}}</h3>

                        <p>Courses Requests</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{Messages}}</h3>

                        <p>Messages</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
        </div>
    </div>
</template>
<style>
#myChart {
  border: 1px solid grey;
}
</style>
<script>
export default{
    data(){
        return{
            courses:'',
            hacks:'',
            cracks:'',
            blogs:'',
            CatCrack:'',
            CatTech:'',
            Messages:'',
        }
    },
    methods:{
        getCourses(){
            axios.get('/CountCourses').then((response)=>{
                this.courses=response.data
            })
        },
        getHacks(){
            axios.get('/CountTech').then((response)=>{
                this.hacks=response.data
            })
        },
        getCracks(){
            axios.get('/CountCrack').then((response)=>{
                this.cracks=response.data
            })
        },
        getBlogs(){
            axios.get('/CountBlog').then((response)=>{
                this.blogs=response.data
            })
        },
        getCatCracks(){
            axios.get('/CrackMenuCount').then((response)=>{
                this.CatCrack=response.data
            })
        },
        getCatTechs(){
            axios.get('/TechMenuCount').then((response)=>{
                this.CatTech=response.data
                this.Messages=response.data
            })},
        getMessage(){
            axios.get('/MessagesCount').then((response)=>{
                this.Messages=response.data
            })
        },
    },
    created(){
        this.getCourses()
        this.getHacks()
        this.getCracks()
        this.getBlogs()
        this.getCatCracks()
        this.getCatTechs()
        this.getCatMessages()
    }
}
</script>
