<template>


<div class="nk-app-root">
<!-- main @s -->
<div class="nk-main">
<!-- wrap @s -->
<div class="nk-wrap nk-wrap-nosidebar">
<!-- content @s -->
<div class="nk-content" style="border-top:solid 30px #117864 ">
<div class="nk-split nk-split-page nk-split-md">

<div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
<div class="absolute-top-right d-lg-none p-5">
<a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
</div>
<div class="nk-block nk-block-middle nk-auth-body">
<div class="brand-logo pb-5">
<a href="html/index.html" class="logo-link">
<img :src="$page.props.system.image_directory+'logos/logo.png'" style="width:100px;"/>
</a>
</div>
<div class="nk-block-head">
<div class="nk-block-head-content">
<h5 class="nk-block-title">Join the Carbon Footprint Information System Today!</h5>
<div class="nk-block-des text-success">
<p>Understanding and managing your carbon footprint has never been easier. By creating a profile on the Carbon Footprint Information System, you take a vital step toward contributing to a sustainable future.</p>


<div class="py-3">
<h6>
    Why Create Your Profile?
</h6>
<ol>
<li class="text-muted">
    Easily measure your carbon emissions from daily activities like transportation, energy use, and more.
</li>
<li class="text-muted">
    Establish personalized emission reduction targets to make a meaningful difference.
</li>
<li class="text-muted">
    Gain access to expert insights, tools, and tips for reducing your footprint effectively.
</li>
<li class="text-muted">
    Join a global community committed to combating climate change.
</li>
</ol>




</div>







</div>
</div>
</div>
</div>





<!-- .nk-block -->
<div class="nk-block nk-auth-footer">
<div class="nk-block-between">
<ul class="nav nav-sm">
<li class="nav-item">
<a class="nav-link" href="#">Terms &amp; Condition</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Privacy Policy</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Help</a>
</li>

</ul><!-- .nav -->
</div>
<div class="mt-3">
<p>© {{ year }} UCR. All Rights Reserved.</p>
</div>
</div><!-- .nk-block -->
</div><!-- .nk-split-content -->












<div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right toggle-screen-lg" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
<div class="slider-wrap w-100 w-max-550px  p-3 p-sm-3 m-auto">
<div class="nk-feature nk-feature-center">
<div class="nk-feature-content  py-4 p-sm-2">


<div class="user-card user-card-s2">
<div class="user-avatar lg bg-secondary">
<span>

    <i class="bi bi-person-fill" style="font-size:50px;"></i>
</span>
<div class="status dot dot-lg dot-success"></div>
</div>
<div class="user-info">
<h6 style="text-transform:capitalize;">{{ data.firstname }} {{ data.lastname }} </h6>
<span class="sub-text">
{{ data.email }}
</span>
</div>
</div>




<el-tabs v-model="activeName">
<el-tab-pane label="Personal Profile" name="first">


    <create-user-profile/>


</el-tab-pane>
<el-tab-pane label="Business/Organisation Profile" name="second">
<create-business-profile :category="category"/>
</el-tab-pane>
</el-tabs>












</div>
</div><!-- .nk-feature -->
</div><!-- .slider-wrap -->
</div><!-- .nk-split-content -->
</div><!-- .nk-split -->
</div>
<!-- wrap @e -->
</div>
<!-- content @e -->
</div>
<!-- main @e -->
</div>









</template>
<script>

import CreateUserProfile from '../../forms/CreateUserProfile.vue';
import CreateBusinessProfile from '../../forms/CreateBusinessProfile.vue';
export default {
components:{
CreateUserProfile,
CreateBusinessProfile

},

props:{
title:{},
response:[],

},


data(){return{
subtitle:'Help us understand your needs and preferences.',
data:this.response.data,
activeName:'first',



}},


computed:{
category(){
return this.response.data.category;
},

year(){
var date=new Date();
return date.getFullYear();
}


}



}
</script>
<style scoped>
ol li{
list-style:lower-roman;
margin-bottom: 15px;
font-size: 14px;
}
</style>