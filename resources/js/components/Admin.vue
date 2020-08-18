<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

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
                        <h3>150</h3>

                        <p>Messages</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!--End Small-box-->
            </div>
          <div class="col-6 col-lg-3">
                <canvas id="myChart" width="400" height="400"></canvas>
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

        }
    },
    methods:{
        drawChart(){
             swal("Good job!", "You clicked the button!", "success");
        },
        mounted(){
            this.alert()
            this.drawChart()
           
        }
    }
}
</script>