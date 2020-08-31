<template>
<div class="container">
    <div class="col-sm-12">
       <div class="card" style="elevation:0 !important;backfround-color:#f8f9fb !important">
           <div class="card-body">
               <div class="container">
                   <!-- <alert-success :form="form" message="Your changes have been saved!"></alert-success> -->
                 <form method="post" action="/Course/Store">
                     <input type="hidden" :v-model="token" name="_token" :value="token">
                    <fieldset style="border:1px solid green !important">
                        <legend class="text-center" style="border:1px solid red;width:50% !important">
                           Add A course
                        </legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="CourseTitle" class="form-control"   name="CourseTitle" placeholder="Course Title" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-6-->
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                       <select class="form-control" name="Category"  style="width:90%;margin-left:10px;margin-right:10px !important">
                                           <option label="Select Category"></option>
                                           <option v-for="menu in menus" :key="menu.id" :value="menu.Name">{{menu.Name}}</option>
                                       </select>

                                </div>
                            </div>
                            <!--end col sm-6-->
                          <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="Instructor" class="form-control"   name="Instructor" placeholder="Course Instructor" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-6-->
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="number" v-model="Rating" class="form-control"  name="Rating" placeholder="Course Rating" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-6-->
                             <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="number" v-model="Students" class="form-control"   name="Students" placeholder="Course Students Enrolled" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-6-->
                             <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="CourseLink" class="form-control"  name="CourseLink" placeholder="Course Link" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-6-->
                        </div>
                         <div class="col-sm-6 offset-sm-3">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="CourseBanner" class="form-control"   name="CourseBanner" placeholder="Course Banner" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">

                                </div>
                            </div>
                            <!--end col sm-12-->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea v-model="Prerequisites" class="form-control" id="summernote"   name="Prerequisites"  placeholder="Course Prerequisites"></textarea>

                                </div>
                            </div>
                            <!--end col-sm-12-->
                             <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea v-model="Description" class="form-control summernote"   name="Description"  placeholder="Description here"></textarea>
                                </div>
                            </div>
                            <!--end col-sm-12-->
                    </fieldset>
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <button class="btn btn-success btn-block mt-3" type="submit">Submit Course</button>
                        </div>
                    </div>
                 </form>
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
            alert:'',
            menus:[],
            token:'',
            CourseTitle:'',
            Category:'',
            Instructor:'',
            Rating:'',
            Students:'',
            CourseLink:'',
            Prerequisites:'',
            Description:'',
            CourseBanner:'',
        }
    },
    methods:{
          loadMenus(){
            axios.get('/NtEeRAZWyEkd6QBNQNphgf7').then((response)=>{
                this.menus=response.data.menus;
            })
        },
      login(){
          console.log(this.token)
        // axios.post('/Course/Store',{
        //     _token:this.token,
        //     CourseTitle:this.CourseTitle,
        //     Category:this.Category,
        //     Instructor:this.Instructor,
        //     Rating:this.Rating,
        //     Students:this.Students,
        //     CourseLink:this.CourseLink,
        //     Prerequisites:this.Prerequisites,
        //     Description:this.Description,
        //     CourseBanner:this.CourseBanner,
        // }).then((data)=>(
        //     console.log(data.data),
        //     swal("Success!!!","Data Succesfully Saved","success"),
        //     this.form.reset()
        // ));
      }
    },
    created(){
          this.token= $('meta[name="csrf-token"]').attr('content'),
        this.loadMenus()
        // console.log('this is going to be the login form')
    }
}
</script>
