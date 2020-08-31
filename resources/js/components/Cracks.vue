<template>
    <div class="container-fluid">
        <div class="row">
            <div class="pull-right">
                <button class="btn btn-danger mb-2">Add Crack</button>
            </div>
              <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Title: {{singleCrack.CrackTitle}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-6">
                       <img :src="singleCrack.FeaturedImage" width="100%">
                  </div>
                  <div class="col-sm-6">
                   <h1>   {{ singleCrack.Title }}</h1>
                     Category: <h3>{{ singleCrack.Category }}</h3>
                    <strong>  {{ singleCrack.IntroText }}</strong>
                  </div>
              </div>
                  <span v-html="singleCrack.Description"></span>
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
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <th>Banner</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Intro Text</th>
                </thead>
                <tbody>
                    <tr v-for="crack in Cracks" :key="crack.id">
                        <td>
                            <img :src="crack.FeaturedImage" alt="menu.CrackTilte" width="40px" style="border-radius:30px">
                        </td>
                        <td>{{crack.CrackTitle}}</td>
                        <td>{{crack.Category}}</td>
                        <td>{{crack.IntroText}}</td>
                        <td>
                            <i class="fa fa-edit" style="color:blue" @click="Edit(crack.id)"></i>
                            <i class="fa fa-eye" style="color:green" @click="View(crack.id)" data-toggle="modal" data-target="#modal-view"></i>
                            <i class="fa fa-trash" style="color:red" @click="Delete(crack.id)"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                Cracks:[],
                token:'',
                singleCrack:[]
            }
        },
        methods:{
            Delete(id){
                swal("Delete the Crack ?","This Cant be Undone", {
                    icon:'error',
                    buttons: {
                    cancel: "Cancel the Operation",
                    delete: {
                    text: "Delete the Crack!",
                    value: "delete",
                    },
                },
            })
            .then((value) => {
                switch (value) {
                    case "delete":
                    axios.get('/Delete/Crack/'+id).then((data)=>{
                        console.log(data)
                    swal("Ok!", "The Article Has Been Deleted", "success");
                        this.getCracks()
                    })

                    break;

                    default:
                    swal("Okay. Nice Choice!");
                }
            });
            },
            View(id){
                //get the crack and view here
                axios.get('/Single/Crack/'+id).then((response)=>{
                    console.log(response.data)
                   this.singleCrack=response.data
                })
            },
            Edit(id){
                window.open('/cracks/edit/'+id,'_parent')
            },
            getCracks:function(){
                axios.get('/CracksAll').then((response)=>{
                   this.Cracks=response.data
                });
            }
        },created:function(){
            this.getCracks()
            this.token= $('meta[name="csrf-token"]').attr('content')

        }
    }
</script>
