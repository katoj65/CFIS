<template>
<landing-layout>
<banner-component/>





<!--Hire jamstack start-->
<section class="pattern-square bg-light">
    <div class="container position-relative z-1 py-3">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 col-12 order-2">

                        <div class="p-5">


                            <h3 class="mb-5">
                            Please Contact Us!
                            </h3>
                            <h5 class="text-success mt-4">Working Hours</h5>
                            <p class="mt-1">
                            Monday to Friday: 9:00 AM – 5:00 PM
                            </p>
                            <p>
                            Saturday: 10:00 AM – 2:00 PM
                            </p>
                            <p>
                            Sunday: Closed
                            </p>


                            <ul style="padding:0;" class="mt-5">
                            <li>
                            <p>
                            <b-icon icon="telephone-fill" aria-hidden="true" class="mr-3" scale="1.5"></b-icon> 0752567534
                            </p>
                            </li>
                            <li>
                            <p>
                            <b-icon icon="envelope-fill" aria-hidden="true" class="mr-3" scale="1.5"></b-icon> ugandacarbonregistry@gmail.com
                            </p>
                            </li>

                            <li>
                            <p>
                            <b-icon icon="facebook" aria-hidden="true" class="mr-3" scale="1.5"></b-icon> Facebook
                            </p>
                            </li>

                            <li>
                            <p>
                            <b-icon icon="twitter" aria-hidden="true" class="mr-3" scale="1.5"></b-icon> Twitter
                            </p>
                            </li>

                            <li>
                            <p>
                            <b-icon icon="linkedin" aria-hidden="true" class="mr-3" scale="1.5"></b-icon> LinkedIn
                            </p>
                            </li>

                            </ul>

                            </div>

                    </div>






                    <div class="col-lg-6 col-12 order-lg-2">
                        <div class="card  mb-5 border-0">
                            <div class="card-body">
                               <success-component/>
            <form @submit.prevent="submit" class="">
            <div class="card card-preview border-0">
            <div class="card-inner text-white">

                <h6 class="section-title text-start text-danger text-uppercase mb-3">Get in touch</h6>
                <h4 class="text-dark mb-4">Fill in the contact form</h4>



            <div class="preview-block">
            <div class="row">
            <div class="col-sm-12">
            <div class="form-group">

            <div class="form-control-wrap">
            <input type="text" class="form-control" id="default-01" placeholder="Enter your names" v-model="form.names">
            <error-inline :error="form.errors.names"></error-inline>
            </div>
            </div>
            </div>

            <div class="col-sm-12">
            <div class="form-group">
            <div class="form-control-wrap">
            <input type="email" class="form-control" id="default-05" placeholder="Enter your email address" v-model="form.email">
            <error-inline :error="form.errors.email"></error-inline>
            </div>
            </div>
            </div>

            <div class="col-sm-12">
            <div class="form-group">
            <div class="form-control-wrap">
            <input type="text" class="form-control" id="default-05" placeholder="Enter the subject" v-model="form.subject">
            <error-inline :error="form.errors.subject"></error-inline>
            </div>
            </div>
            </div>

            <div class="col-sm-12">
            <div class="form-group">
            <div class="form-control-wrap">
            <textarea type="text" class="form-control" id="default-05" placeholder="Enter the message" v-model="form.message" style="height:200px;"></textarea>
            <error-inline :error="form.errors.message"></error-inline>
            </div>
            </div>
            </div>


            <div class="col-sm-12 mt-3">
            <div class="form-group">
            <submit-button :title="'Submit'" :isLoading="isLoading" type="submit"/>

            </div>
            </div>


            </div>

            </div>
            </div>
            </div>
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hire jamstack end-->














<template  v-if="status==true">
<div class="swal2-container swal2-center swal2-backdrop-show">
<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
<div class="swal2-header">
<ul class="swal2-progress-steps" style="display: none;">

</ul>
<div class="swal2-icon swal2-error" style="display: none;">

</div><div class="swal2-icon swal2-question" style="display: none;">

</div><div class="swal2-icon swal2-warning" style="display: none;">

</div>
<div class="swal2-icon swal2-info" style="display: none;">
</div>
<div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;">
<div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);">
</div>
<span class="swal2-success-line-tip">
</span> <span class="swal2-success-line-long">
</span>
<div class="swal2-success-ring">
</div>
<div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);">
</div>
<div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">
</div>
</div>
<img class="swal2-image" style="display: none;">
<h2 class="swal2-title" id="swal2-title" style="display: flex;">
Successful!
</h2>
</div>
<div class="swal2-content">
<div id="swal2-content" class="swal2-html-container mt-4" style="display: block;font-size:19px;">
{{ $page.props.flash.success }}
</div>


 </div>
<div class="swal2-actions">
<button type="button" class="swal2-confirm swal2-styled" style="display: inline-block; border-left-color: rgb(30, 224, 172); border-right-color: rgb(30, 224, 172);" @click="status=false">OK</button>

</div>
</div>
</div>
</template>






</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import SubmitButton from '../components/SubmitButton.vue';
import ErrorInline from '../components/ErrorInline.vue';

export default {
components: {
LandingLayout,
BannerComponent,
SubmitButton,
ErrorInline,

},

data(){return{
isLoading:false,
status:false,
//form
form:this.$inertia.form({
names:null,
email:null,
subject:null,
message:null
}),




}},


computed:{
url(){
return this.$page.props.system.url;
}
},
methods:{
submit(){
this.isLoading=true;
this.form.post(this.route('contact.store'),{
onFinish:()=>{
this.isLoading=false;
this.form.reset();
if(this.$page.props.flash.success!=null){
this.status=true;
}else{
this.status=false;
}
}
});


}




}





}
</script>
<style scoped>

.form-control{
 border-radius:0;
 padding:20px;
 margin-bottom:5px;
 border-radius: 5px;
 margin-top:15px;
}
ul li{
margin-bottom:20px;
}
ul{
margin-top:20px;
}

ul li p{
font-size: 18px;
}
p{
    font-size: 18px;
}

.form-control-wrap{
margin-bottom:10px;
}
</style>