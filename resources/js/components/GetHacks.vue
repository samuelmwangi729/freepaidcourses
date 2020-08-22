<template>
    <div class="container-fluid">
          <!--Start Modal-->
            <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{singleHack.Title}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-6">
                       <img :src="singleHack.FeaturedImage" width="100%">
                  </div>
                  <div class="col-sm-6">
                   <h1>   {{ singleHack.Title }}</h1>
                     Category: <h3>{{ singleHack.Category }}</h3>
                    <strong>  {{ singleHack.IntroText }}</strong>
                  </div>
              </div>
                  <span v-html="singleHack.Description"></span>
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
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Dp</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="hack in Hacks" :key="hack.id">
                    <td><img :src="hack.FeaturedImage" width="30px"></td>
                    <td>{{ hack.Title }}</td>
                    <td>
                        <i class="fa fa-edit btn-sm btn-primary" @click="Edit(hack.id)"></i>
                        <i class="fa fa-eye btn-sm btn-success" @click="View(hack.id)" data-toggle="modal" data-target="#modal-view"></i>
                        <i class="fa fa-trash btn-sm btn-danger" @click="Delete(hack.id)"></i>
                    </td>
                </tr>  
            </tbody>
        </table>
    </div>
</template>
<script>
export default{
    data(){
        return{
            Hacks:[],
            singleHack:[]
        }
    },
    methods:{
        loadHacks(){
           axios.get('/FetchHacks').then((data)=>{
               this.Hacks=data.data.Hacks
           })
        },
        Edit(id){
            //get this
            window.open(id+'/edit','_parent')
        },
        View(id){
            axios.get('/Hack/Show/'+id).then((response)=>{
                this.singleHack=response.data.Hack
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
                    axios.get('/Delete/Hack/'+id).then((data)=>{
                    swal("Ok!", "The Hack Has Been Deleted", "success");
                        this.loadHacks()
                    })

                    break;

                    default:
                    swal("Okay. Nice Choice!");
                }
            });
           
        }
    },
    created(){
        this.loadHacks()
    }
}
</script>