<template>
<div class="container-fluid">
    <h2 class="text-center">
        Add Cracks Menu
    </h2>
    <div class="row">
        <div class="col-sm-8">
            <form class="form-inline" @submit.prevent="AddMenu()">
                <fieldset>
                    <legend>Add Software Types</legend>
                    <span v-if="errorName" style="color:red">{{errorName}}</span><br>
                    <input type="text" v-model="Name" class="form-control" placeholder="Enter the Menu">
                    <button class="btn btn-success">Add Menu</button>
                </fieldset>
            </form>
        </div>
        <div class="col-sm-4">
            <table class="table table-hover table-colored">
                <thead>
                    <th>Menu</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr v-for="menu in Menus" :key="menu.id">
                        <td>{{menu.Name}}</td>
                        <td>
                            <i class="fa fa-trash" style="color:red" @click="Delete(menu.id)"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>
<script>
    export default{
        data(){
            return{
                Name:'',
                token:'',
                errorName:'',
                Menus:[]
            }
        },
        methods:{Delete(id){
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
                    axios.post('/Delete/cmenu',{
                        _token:this.token,
                        id:id
                    }).then((response)=>{
                    //show an alert box
                      swal("Okay. Menu Deleted!");
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
        },
            AddMenu:function(){
                //check if the name is empty
                if(this.Name==''){
                    this.errorName='This field is Required';
                }else{
                    //post the data
                    axios.post('/CracksMenu',{
                        _token:this.token,
                        Name:this.Name
                    }).then((response)=>{
                        swal({
                        title: "Success",
                        text: "The Category Has been Saved",
                        icon: "success",
                        })
                        this.Name=""
                        this.getMenus()
                    }).catch((err)=>{
                        swal({
                        title: "Error",
                        text: "Unknown Error Occurred",
                        icon: "warning",
                        })
                    });
                }
            },
            getMenus(){
                axios.get('/getCracksMenu').then((response)=>{
                    // console.log(response.data)
                    this.Menus=response.data
                })
            }
        },
        created(){
            this.getMenus(),
            this.token= $('meta[name="csrf-token"]').attr('content')
            console.log(this.token)
        },
        watch:{
            Name:function(){
                this.errorName=''
            }
        }
    }
</script>
