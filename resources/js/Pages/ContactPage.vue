<template>
<landing-layout>
<banner-component/>

<div class="container-fluid feature bg-white py-0">
<div class="container py-5">
<div class="row g-0 p-0">
<div class="col-md-6 bg-light d-flex align-items-center">
<div class="p-5">
<h3 class="mb-5">
    Have Any Query? Please Contact Us!
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






<div class="col-md-6 bg-dark">
<div class="p-5">
    <h6 class="section-title text-start text-danger text-uppercase mb-3">Get in touch</h6>
    <h4 class="text-white mb-4">Fill in the contact form</h4>
<form @submit.prevent="submit">
<div class="card card-preview border-0 bg-dark">
<div class="card-inner text-white">

<div class="preview-block">
<div class="row">
<div class="col-sm-6">
<div class="form-group">

<div class="form-control-wrap">
<input type="text" class="form-control" id="default-01" placeholder="Enter your names" v-model="form.names">
</div>
</div>
</div>



<div class="col-sm-6">
<div class="form-group">
<div class="form-control-wrap">
<input type="text" class="form-control" id="default-05" placeholder="Enter your email address" v-model="form.email">
</div>
</div>
</div>



<div class="col-sm-12 mt-3">
<div class="form-group">
<div class="form-control-wrap">
<input type="text" class="form-control" id="default-05" placeholder="Enter the subject" v-model="form.subject">
</div>
</div>
</div>




<div class="col-sm-12 mt-3">
<div class="form-group">
<div class="form-control-wrap">
<textarea type="text" class="form-control" id="default-05" placeholder="Enter the message" v-model="form.message"></textarea>
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









</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import SubmitButton from '../components/SubmitButton.vue';
export default {
components: {
LandingLayout,
BannerComponent,
SubmitButton,
},

data(){return{
isLoading:false,
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

});


}




}





}
</script>
<style scoped>

.form-control{
 border-radius:0;
 border:none;
 padding:20px;
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


</style>