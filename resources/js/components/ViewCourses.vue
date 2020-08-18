<template>
    <div class="container-fluid">
        <h2>
            <!--Start Modal-->
            <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{course.CourseTitle}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           <div class="row">
               <div class="col-sm-6">
                 <div class="row">
                     <div class="col-sm-12">
                         <img :src="course.CourseBanner" width="100%">
                         <h6>Category: {{course.Category}}</h6>
                         <h6>Instructor: {{course.Instructor}}</h6>
                         <h6>Students: {{course.Students}}</h6>
                         <h6>Rating: <span v-if="course.Rating==1" style="color:gold">
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
                                            </span>{{ course.Rating }} (Stars)
                                            </h6>
                     </div>
                        <span v-html="course.Prerequisites"></span>
                 </div>
               </div>
               <!--end col-->
               <div class="col-sm-6">
                   <span v-html="course.Description"></span>
               </div>
           </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
            <!--end Modal-->
            <!--Start Edit  Modal-->
                        <!--Start Modal-->
         <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">
                    <div class="row text-center">
                          Edit {{course.CourseTitle}}
                    </div>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container">
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
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
            <!--end Modal-->
            <!--End Modal-->
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-condensed" style="font-size:10px">
                    <thead >
                        <tr>
                            <th>Banner</th>
                            <th>Course Title</th>
                            <th>Instructor</th>
                            <th>Link</th>
                            <th>Students</th>
                            <th>Rating</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="course in courses" :key="course.id">
                            <td><img :src="course.CourseBanner" width="30px" height="30px" style="border-radius:30px"></td>
                            <td>{{course.CourseTitle}}</td>
                            <td>{{course.Instructor}}</td>
                            <td><a :href="course.CourseLink" target="_blank" class="btn btn-success btn-sm  fa fa-eye">View Course</a></td>
                            <td>{{course.Students}}</td>
                            <td>{{course.Rating}}</td>
                            <td>
                                <i class="fa fa-edit btn btn-primary btn-sm" @click="Edit(course.id)" data-toggle="modal" data-target="#modal-edit"></i>&nbsp;<i class="fa fa-eye btn btn-success btn-sm" data-toggle="modal" data-target="#modal-xl" @click="GetCourse(course.id)"></i>&nbsp;<i class="fa fa-trash btn btn-danger btn-sm" @click="Delete(course.id)"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </h2>
    </div>
</template>
<script>
export default{
    data(){
        return{
            courses:[],
            course:[],
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
        Edit(id){
             axios.get('/Course/View/4qnPjr6Ycg66gOfqyUXQagQSSkp3/'+id).then((response)=>{
                // console.log(response.data.course)
                this.course=response.data.course
            })
        },
        GetCourse(id){
            //get the course by id 
            axios.get('/Course/View/4qnPjr6Ycg66gOfqyUXQagQSSkp3/'+id).then((response)=>{
                // console.log(response.data.course)
                this.course=response.data.course
            })

        },
        Delete(id){
            swal("Delete the Course?","This Cant be Undone", {
                    icon:'error',
                    buttons: {
                    cancel: "Cancel the Operation",
                    delete: {
                    text: "Delete the Course!",
                    value: "delete",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "delete":
                    axios.post('/Course/JPUFR37qMEr64CHDO0UiQQAIiniSy/'+id).then((data)=>{
                    swal("Ok!", "The Course Has Been Deleted", "success");
                        this.loadCourses()
                    })

                    break;

                    default:
                    swal("Okay. Nice Choice!");
                }
            });
},
        loadCourses(){
            axios.get('/3fb3I6D1Nfyu7t3jSV3RB74').then((data)=>{
                this.courses=data.data.courses
            })
        },
    },
    created(){
        this.loadCourses(),
        this.loadMenus()
    }
}
</script>