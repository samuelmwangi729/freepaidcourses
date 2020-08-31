<template>
  <section class="clean-block clean-catalog dark">
      <div class="row-fluid" style="margin-top:40px">
          <!-- Start: Bold BS4 Jumbotron with Particles js -->
          <div class="jumbotron jumbotron-fluid jumbotron-main">
                <div id="particles-js">
              <canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
              </div>
              <div class="container center-vertically-holder" style="margin-top:-20px;">
                  <div class="row center-vertically">
                      <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                          <h1>We give you the freedom to choose what you want.Make a wise Decision<br>
                          We are not responsibe for it
                          </h1>
                          <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End: Bold BS4 Jumbotron with Particles js -->
          <div class="block-heading" style="margin-top: 40px;">
              <h2 class="text-info" style="font-weight: bold;">Available Cracks</h2>
          </div>
          <div class="content">
              <div class="row">
                  <div class="col-md-3">
                      <div class="d-none d-md-block">
                          <div class="filters">
                              <div class="filter-item">
                                  <h3 style="color: red;">Categories</h3>
                                    <div class="form-check" v-for="category in categories" :key="category.id">
                                      <label class="form-check-label" for="formCheck-1" style="font-weight: bold;font-size: 12px;" @click="getCat(category.Name)">
                                      {{ category.Name }}</label>
                                    </div>
                              </div>
                          </div>
                      </div>
                      <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" href="#filters" role="button">Filters<i class="icon-arrow-down filter-caret"></i></a>
                          <div class="collapse"
                              id="filters">
                              <div class="filters">
                                  <div class="filter-item">
                                       <h3 style="color: red;">Categories</h3>
                                      <div class="form-check" v-for="category in categories" :key="category.id">
                                      <label class="form-check-label" for="formCheck-1" style="font-weight: bold;font-size: 12px;" @click="getCat(category.Name)">
                                      {{ category.Name }}</label>
                                    </div>
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-9">
                  <div class="products">
                      <div class="row no-gutters">
                          <div class="col-12 col-md-6 col-lg-4" v-for="crack in cracks" :key="crack.id">
                              <div class="clean-product-item">
                                  <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" :src="crack.FeaturedImage" style="height:400px !important"></a></div>
                                  <div class="product-name text-center"><a href="#">{{crack.CrackTitle}}</a></div>{{ crack.IntroText }}
                                  <div class="about">
                                      <div class="rating">
                                          <i class="fa fa-star" style="color:gold"></i>
                                          <i class="fa fa-star" style="color:gold"></i>
                                          <i class="fa fa-star" style="color:gold"></i>
                                          <i class="fa fa-star" style="color:gold"></i>
                                          <i class="fa fa-star" style="color:gold"></i>
                                      </div>
                                     <button class="btn btn-outline-danger" @click="View(crack.Slug)">More <i class="fa fa-chevron-right" ></i></button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>
</template>
<script>
export default{
    data(){
        return{
            cracks:[],
            categories:[],
            count:''
        }
    },
    methods:{
        View(slug){
            window.open('/Crack/'+slug,'_parent');
        },
        getCat(cat){
            axios.get('/sppCat/'+cat).then((response)=>{
                this.cracks=response.data
                this.count=this.cracks.length
                if(this.cracks.length==0){
                    swal("Ooh No!", "No cracks Available!!!!Kindly Check Again Later", "warning");
                }
                // console.log(response.data)
            })
        },
        loadCategories(){
            axios.get('/getCracksMenu').then((response)=>{
                this.categories=response.data
            })
        },
        loadCracks(){
           axios.get('/getCracks').then((response)=>{
               this.cracks=response.data
           })
        }
    },
    created(){
        this.loadCategories()
        this.loadCracks()
    }
}
</script>
