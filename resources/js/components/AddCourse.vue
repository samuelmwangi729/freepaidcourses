<template>
<div class="container">
    <div class="col-sm-12">
       <div class="card" style="elevation:0 !important;backfround-color:#f8f9fb !important">
           <div class="card-body">
               <div class="container">
                   <!-- <alert-success :form="form" message="Your changes have been saved!"></alert-success> -->
                 <form @submit.prevent="login" @keydown="form.onKeydown($event)">
                    <fieldset style="border:1px solid green !important">
                        <legend class="text-center" style="border:1px solid red;width:50% !important">
                           Add A course
                        </legend>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="form.CourseTitle" class="form-control" :class="{'is-invalid':form.errors.has('CourseTitle')}"  name="CourseTitle" placeholder="Course Title" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='CourseTitle'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                       <select class="form-control" v-model="form.Category" :class="{'is-invalid':form.errors.has('Category')}" style="width:90%;margin-left:10px;margin-right:10px !important">
                                           <option label="Select Category"></option>
                                           <option v-for="menu in menus" :key="menu.id" :value="menu.Name">{{menu.Name}}</option>
                                       </select>
                                        <has-error :form='form' field='Category'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                          <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="form.Instructor" class="form-control" :class="{'is-invalid':form.errors.has('Instructor')}"  name="Instructor" placeholder="Course Instructor" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='Instructor'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                            <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="number" v-model="form.Rating" class="form-control" :class="{'is-invalid':form.errors.has('Rating')}"  name="Rating" placeholder="Course Rating" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='Instructor'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                             <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="number" v-model="form.Students" class="form-control" :class="{'is-invalid':form.errors.has('Students')}"  name="Students" placeholder="Course Students Enrolled" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='Students'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                             <div class="col-sm-6">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="form.CourseLink" class="form-control" :class="{'is-invalid':form.errors.has('CourseLink')}"  name="CourseLink" placeholder="Course Link" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='CourseLink'></has-error>
                                </div>
                            </div>
                            <!--end col sm-6-->
                        </div>
                         <div class="col-sm-6 offset-sm-3">
                                <div class="form-group text-center"  style="margin-top:20px">
                                        <input type="text" v-model="form.CourseBanner" class="form-control" :class="{'is-invalid':form.errors.has('CourseBanner')}"  name="CourseBanner" placeholder="Course Banner" autocomplete style="width:90%;margin-left:10px;margin-right:10px !important">
                                        <has-error :form='form' field='CourseBanner'></has-error>
                                </div>
                            </div>
                            <!--end col sm-12-->
                            <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <textarea v-model="form.Prerequisites" class="form-control" id="ssummernote"  name="Prerequisites" :class="{'is-invalid':form.errors.has('CourseBanner')}" placeholder="Course Prerequisites"></textarea>
                                      <has-error :form='form' field='Prerequisites'></has-error>
                                </div>
                            </div>
                            <!--end col-sm-12-->
                             <div class="col-sm-12">
                                <div class="form-group text-center">
                                    <textarea v-model="form.Description" class="form-control" id="ssummernote"  name="Prerequisites" :class="{'is-invalid':form.errors.has('Description')}" placeholder="Description here"></textarea>
                                      <has-error :form='form' field='Description'></has-error>
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
          form:new Form({
            CourseTitle:'',
            Category:'',
            Instructor:'',
            Rating:'',
            Students:'',
            CourseLink:'',
            Prerequisites:'',
            Description:'',
            CourseBanner:'',
          })
        }
    },
    methods:{
          loadMenus(){
            axios.get('/NtEeRAZWyEkd6QBNQNphgf7').then((response)=>{
                this.menus=response.data.menus;
            })
        },
      login(){
        this.form.post('/Course/Store').then((data)=>(
            console.log(data.data),
            swal("Success!!!","Data Succesfully Saved","success"),
            this.form.reset()
        ));
      }
    },
    created(){
        this.loadMenus()
        // console.log('this is going to be the login form')
    }
}
</script>