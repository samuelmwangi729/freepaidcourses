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
                        <p>For the latest trends and new innovations in the IT sector</p><a class="btn btn-primary" role="button" href="#articles">Find Them Here<i class="fa fa-chevron-down" style="padding-left: 10px;"></i></a></div>
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
                <h2 class="text-center" id="articles">Tech Articles</h2>
            </div>
            <!-- End: Intro -->
            <!-- Start: Articles -->
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg?h=48517c5de1e0a97c47195a8c2a6fa5ea"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg?h=d468a07214c501ac1b41314b67eff488"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg?h=1e943b34582419a55451e4baa5bad9ac"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    <!-- End: Articles -->
    </div>
    </div>
    <!-- End: Article List -->
    </div>
</template>
<script>
export default{
    data(){
        return{
            Hacks:[]
        }
    },
    methods:{

    },
    created(){
        console.log('Tech Hacks Loaded')
    }
}
</script>