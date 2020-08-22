<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="text-center">Add Tech Hacks Categories</h3>
                <form @submit.prevent="AddCategories">
                    <div class="col">
                        <div class="form-group">
                            <label class="label-control" for="Category">Category</label>
                            <input type="text" class="form-control" v-model="Category">
                        </div>
                        <button class="btn btn-success">Add Category</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <h3 class="text-center">Tech Hacks Categories</h3>
                <table class="table table-hover table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="category in categories" :key="category.id">
                            <td>{{category.Category}}</td>
                            <td class="text-center">
                                <i class="fa fa-edit btn btn-primary" ></i>
                                <i class="fa fa-trash btn btn-danger" @click="DeleteCategory(category.id)"></i>
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
            Category:'',
            categories:[],
            token:''
        }
    },
    methods:{
        AddCategories(){
            axios.post('/vqgjiDdKDjvKgp49o',{
                _token:this.token,
                Category:this.Category
            }).then((response)=>{
                console.log(response.data)
                //load the data
                this.loadCategories()
                //show the sweet alert dialog box
                this.Category=''
                  swal("Success!!!","Data Succesfully Saved","success")

            })
        },
        loadCategories(){
            axios.get('/cJGqyURLYO9HbcO3F0VH1').then((response)=>{
                this.categories=response.data.Categories
            })
        },
        DeleteCategory(id){
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
                    axios.post('/Category/JKv6i9IqrBhh2hZgObRAOs6HPAzZQZW2Uv/',{
                        _token:this.token,
                        id:id
                    }).then((data)=>{
                    swal("Ok!", "The Course Has Been Deleted", "success");
                       this.loadCategories()
                    })

                    break;

                    default:
                    swal("Okay. Nice Choice!");
                }
            });
        }
    },
    created(){
        this.loadCategories(),
        $this.token= $('meta[name="csrf-token"]').attr('content')
    }
}
</script>