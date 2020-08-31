<template>
<div class="container-fluid">
<h2>Blog Categories Here</h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Menus</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" @submit.prevent="PostMenu">
                    <!-- @csrf -->
                  <div class="card-body">
                    <div class="form-group row">
                      <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Menu Name</label> -->
                      <div class="col-sm-10">
                          <span v-if="errorName" style="color:red">This field is required</span>
                        <input type="text" class="form-control" v-model="Name" placeholder="Eg. IT & Software">
                        {{Name}}
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add Menu</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Menus</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="menu in Menus" :key="menu.id">
                                <td>{{menu.Name}}</td>
                                <td>
                                    <i class="fa fa-trash" @click="Delete(menu.id)" style="color:red"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
</template>
<<script>
    export default{
        data(){
            return{
                Name:'',
                errorName:'',
                token:'',
                Menus:[]
            }
        },
        methods: {
            PostMenu(){
                //post the menus
                if(this.Name==''){
                    this.errorName='Name cant be Empty'
                    return false;
                }else{
                    //post the data
                    axios.post('/blog/Categories',{
                        _token:this.token,
                        Name:this.Name
                    }).then((response)=>{
                        console.log(response.data==true)
                        if(response.data==true){
                            // sweetalert
                            swal({
                            title: "Success",
                            text: "The Category Has been Saved",
                            icon: "success",
                            })
                            this.Name=""
                            this.getMenus()
                        }else{
                            swal({
                            title: "Error",
                            text: "The Category Has  Not been Saved",
                            icon: "warning",
                            })
                        }

                    }).catch((error)=>{
                        swal({
                            title: "Error",
                            text: "Unknown Error Occurred",
                            icon: "warning",
                            })
                    });
                }
            },
            getMenus(){
                //load them from databases
               axios.get('/blog/Categories').then((response)=>{
                 this.Menus=response.data
               }).catch((error)=>{
                   console.log(error)
               })
            },
            Delete(id){
                swal("Delete the Menu?","This Cant be Undone", {
                    icon:'error',
                    buttons: {
                    cancel: "Cancel the Operation",
                    delete: {
                    text: "Delete the menu!",
                    value: "delete",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "delete":
                    axios.post('/delete/menu',{
                        _token:this.token,
                        id:id
                    }).then((response)=>{
                    //show an alert box
                      swal("Okay. Category Deleted!");
                    // console.log(response.data)
                    this.getMenus()
                    //then show the success alert box
                    }).catch((error)=>{
                        //if the menu cant be deleted
                        console.log(error)
                    });

                    break;

                    default:
                    swal("Okay. Nice Choice!");
                }
            });
            }
        },
        created() {
            this.getMenus()
       this.token= $('meta[name="csrf-token"]').attr('content')

        },
        watch:{
            Name:function(){
                this.errorName=""
            }
        }
    }
</script>
