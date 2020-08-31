<template>
    <div class="container-fluid" style="margin-top:70px">
          <section class="clean-block clean-form dark">
            <!-- Start: dh-row-text-image-right-responsive -->
            <div class="row clearmargin clearpadding row-image-txt">
                <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6" style="background-image: url(&quot;assets/img/architect-at-the-construction.jpg?h=7b13db586f5ab98191e91d6d963e1f7f&quot;);background-size: cover;height: 400px;background-position: center;">
                    <div></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
                    <h1>Contact Us</h1>
                    <hr>
                    <p>You can contact Via the form below or get us in our social platforms.Feel free to request a course and we will be glad to upload it for you.</p>
                    <div style="text-align:center"><button class="btn btn-light btn-lg" type="button">Back To Home</button></div>
                </div>
            </div>
            <!-- End: dh-row-text-image-right-responsive -->
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p style="color: rgb(13,13,13);">Get in touch with Us.</p>
                </div>
                <form @submit.prevent="SendMessage">
                    <div class="form-group">
                        <label>Name</label>
                         <br> <span v-if="errorName" style="color:red">{{errorName}}</span>
                    <input class="form-control" type="text" v-model="Name">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <br> <span v-if="errorSubject" style="color:red">{{errorSubject}}</span>
                    <input class="form-control" type="text" v-model="Subject">
                    </div>
                    <div class="form-group"><label>Email</label>  <br> <span v-if="errorEmail" style="color:red">{{errorEmail}}</span><input class="form-control" type="email" v-model="Email"></div>
                    <div class="form-group"><label>Message</label> <br>  <span v-if="errorMessage" style="color:red">{{errorMessage}}</span><textarea class="form-control" v-model="Message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                Name:'',
                Subject:'',
                Email:'',
                Message:'',
                token:'',
                errorName:'',
                errorSubject:'',
                errorEmail:'',
                errorMessage:'',
            }
        },
        methods:{
            SendMessage:function(){
                if(this.Name==''){
                    this.errorName="The Name Field is Required";
                    return false;
                }
                if(this.Subject==''){
                    this.errorSubject="The Suject Field is Required";
                    return false;
                }
                if(this.Email==''){
                    this.errorEmail="The Email Field is Required";
                    return false;
                }
                if(this.Message==''){
                    this.errorMessage="Message Is required";
                    return false;
                }
                //if its none
                axios.post('/Messages/Controller',{
                    _token:this.token,
                    Name: this.Name,
                    Subject: this.Subject,
                    Email: this.Email,
                    Message: this.Message,
                }).then((response)=>{
                   swal({
                    title: "Success",
                    text: "Message Successfuly Sent. We Will Get Back As Soon As Possible",
                    icon: "success",
                    })
                }).catch((error)=>{
                    swal({
                    title: "Error",
                    text: "Unknown Error Occurred",
                    icon: "warning",
                    })
                });
            }
        },
        watch:{
            Name:function(){
                this.errorName=""
            },
            Subject:function(){
                this.errorSubject=""
            },
             Email:function(){
                this.errorEmail=""
            },
             Message:function(){
                this.errorMessage=""
            }
        },
        created(){
            //set the csrf token
            this.token= $('meta[name="csrf-token"]').attr('content'),
            console.log(this.token)
        }
    }
</script>
