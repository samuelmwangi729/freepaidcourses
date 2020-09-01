<template>
    <div class="row-fluid">
    <!-- Start: Highlight Phone -->
    <div class="highlight-phone" style="margin-top: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <h2>Tech Hacks</h2>
                        <p>For the latest trends and new innovations in the IT sector</p><a class="btn btn-primary" role="button" href="javascript:void(0)">Find Them Here<i class="fa fa-chevron-down" style="padding-left: 10px;"></i></a></div>
                    <!-- End: Intro -->
                </div>
                <div class="col-sm-4">
                    <!-- Start: Smartphone -->
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="assets/img/scenery/image3.jpg?h=ac24b5d095faa4c54bfac77ea0d550dd"></div>
                    <!-- End: Smartphone -->
                </div>
            </div>
        </div>
    </div>
    <!-- End: Highlight Phone -->
     <!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-9">
                    <div class="row">
                         <div class="col-sm-6 col-md-4 item mt-2" v-for="item in Hacks" :key="item.id">
                            <a href="#"><img class="img-fluid" :src="item.FeaturedImage" style="width:350px;height:300px !important"></a>
                            <h3 class="text-center name">{{item.Title}}</h3>
                            <p class="description text-center" style="color:Red">
                                {{ item.IntroText }}
                            </p>
                            <div class="text-center"><button class="btn btn-outline-success" @click="Open(item.Slug)">More Info.<i class="fa fa-chevron-right"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    Categories
                    <ul class="list-group">
                        <li class="list-group-item" v-for="category in categories" :key="category.id" @click="GetOne(category.Category)">{{ category.Category }}</li>
                    </ul>
                </div>
            </div>
        <!-- End: Articles -->
        </div>
</template>
<script>
    export default{
        data(){
            return{
                categories:[],
                Hacks:[]
            }
        },
        methods:{
            Open(slug){
                window.open('/TechHack/'+slug,'_parent');
            },
            loadCategories(){
            axios.get('/getTechCategories').then((response)=>{
                this.categories=response.data
                console.log(response.data)
            })
            },
            loadHacks(){
                axios.get('/getAllHacks').then((response)=>{
                    this.Hacks=response.data
                })
            },
            GetOne(category){
                    axios.get('/getOneHack/'+category).then((response)=>{
                        this.Hacks=response.data
                        if(response.data.length==0){
                             swal("Ooh No!", "No Posts Available Under "+ category+" Category!!!!Kindly Check Again Later", "warning");
                             this.loadHacks()
                        }
                    })
                },
        },
        created(){
            this.loadHacks()
            this.loadCategories()
        }
    }
</script>
