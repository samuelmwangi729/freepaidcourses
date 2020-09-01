<template>
    <div class="container-fluid">
<!-- Start: Highlight Phone -->
    <div class="highlight-phone" style="margin-top: 90px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <h2>Our Blog</h2>
                        <p>Find&nbsp; latest articles in the IT sector and any related field here</p><a class="btn btn-primary" role="button" href="javascript::void(0)">Read more<i class="fa fa-chevron-down" style="padding-left: 10px;"></i></a></div>
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
    <!-- Start: Article List -->
    <div class="article-list">
        <div class="container-fluid" style="margin-top: 90px;">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center" id="articles">Latest Articles</h2>
            </div>
            <!-- End: Intro -->
            <!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-9">
                    <div class="row">
                         <div class="col-sm-6 col-md-4 item" v-for="item in blogs" :key="item.id">
                            <a href="#"><img class="img-fluid" :src="item.FeaturedImage"></a>
                            <h3 class="name">{{item.BlogTitle}}</h3>
                            <p class="description">
                                {{ item.IntroText }}
                            </p><btn class="btn btn-outline-success" @click="Open(item.Slug)">More Info.<i class="fa fa-chevron-right"></i></btn>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    Categories
                    <ul class="list-group">
                        <li class="list-group-item" v-for="category in categories" :key="category.id" @click="GetOne(category.Name)">{{ category.Name }}</li>
                    </ul>
                </div>
            </div>
    <!-- End: Articles -->
    </div>
    </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                categories:[],
                blogs:[]
            }
        },
        methods:{
            Open(slug){
                window.open('/GetSingleBlog/'+slug,'_parent');
            },
            loadCategories(){
            axios.get('/getBlogCategories').then((response)=>{
                this.categories=response.data
                console.log(response.data)
            })
            },
            loadBlogs(){
                axios.get('/getBlogs').then((response)=>{
                    this.blogs=response.data
                })
            },
            GetOne(category){
                    axios.get('/getOne/'+category).then((response)=>{
                        this.blogs=response.data
                    })
                },
        },
        created(){
            this.loadBlogs()
            this.loadCategories()
        }
    }
</script>
