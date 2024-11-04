<template>
<div class="nk-body bg-lighter npc-general has-sidebar">
<div class="nk-app-root" style="">
<!-- main @s -->
<div class="nk-main">
<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed bg-dark2" data-content="sidebarMenu" style="border:none;">
<div class="nk-sidebar-element nk-sidebar-head" style="border:none;">
<div class="nk-sidebar-brand" style="border-bottom:none;">
<inertia-link class="logo-link nk-sidebar-logo"  style="border-bottom:none;margin-bottom:10px;" :href="route('dashboard')">
<img class="logo-light logo-img" src="http://localhost/carbon/public/images/logos/logo1.png"  alt="logo">
<img class="logo-dark logo-img mt-1" src="http://localhost/carbon/public/images/logos/logo-with-red.png" alt="logo-dark"><br/>

<!-- <div style="font-size:20px;font-weight:bolder;color:white;padding-top:15px;">
<span style="border-bottom:solid thin white;padding-bottom:7px;">
Uganda Carbon Registry</span>
<div style="font-weight:normal;font-size:14px;padding-top:5px;">
Empowering sustainablity through data
</div>
</div> -->

</inertia-link>
</div>
<div style="font-weight:normal;font-size:14px;padding-top:0px;line-height:16px;color:#aab7b8;text-align:right;" class="mt-2 ml-4">
Carbon Footprint Information System<br/>
</div>
<div class="nk-menu-trigger mr-n2" >
<a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
</div>
</div><!-- .nk-sidebar-element -->
<menu-switch style="margin-top:20px;"/>
<div class="nk-sidebar-element" >
<div class="nk-sidebar-content">
<div class="nk-sidebar-menu" data-simplebar style="border-top:none;">

<!-- .nk-menu -->

</div><!-- .nk-sidebar-menu -->
</div><!-- .nk-sidebar-content -->
</div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
<!-- wrap @s -->


<div class="nk-wrap">
<!-- main header @s -->
<div class="nk-header nk-header-fixed is-light" style="border-bottom:none;">
<div class="container-fluid">
<div class="nk-header-wrap">
<div class="nk-menu-trigger d-xl-none ml-n1">
<a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
</div>
<div class="nk-header-brand d-xl-none">
<a href="html/index.html" class="logo-link">
<img class="logo-light logo-img" src=""  alt="logo">
<img class="logo-dark logo-img" src=""  alt="logo-dark">
</a>
</div><!-- .nk-header-brand -->
<div class="nk-header-news d-none d-xl-block">
<div class="nk-news-list">
<modal-component/>
</div>
</div><!-- .nk-header-news -->
<div class="nk-header-tools">
<ul class="nk-quick-nav">
<li>
<inertia-link :href="route('dashboard')" class="router_menu nk-quick-nav-icon">
<em class="icon ni ni-home"></em>
</inertia-link>
</li>



<li>
<inertia-link :href="route('search')" class="router_menu nk-quick-nav-icon">
<em class="icon ni ni-search"></em>
</inertia-link>
</li>

<li class="notification-dropdown mr-n1">
<inertia-link :href="route('notification')" class="router_menu nk-quick-nav-icon">
<em class="icon ni ni-bell"></em>
</inertia-link>
</li><!-- .dropdown -->

<li class="dropdown user-dropdown">
<a href="#" class="dropdown-toggle" trigger="click">
<div class="user-toggle">
<div class="user-avatar sm bg-success">
<em class="icon ni ni-user-fill"></em>
</div>
<div class="user-info d-none d-md-block" style="margin-left:5px;">
<el-dropdown trigger="click">
<span class="el-dropdown-link">
<div class="user-name dropdown-indicator" style="text-transform:capitalize;font-size:15px;">
{{auth.user.firstname+' '}}
</div>
</span>
<el-dropdown-menu slot="dropdown">
<el-dropdown-item><Inertia-link :href="route('profile')" class="dropdown-item"> Profile</Inertia-link> </el-dropdown-item>
<el-dropdown-item><Inertia-link :href="route('settings')" class="dropdown-item">Setting</Inertia-link> </el-dropdown-item>
<el-dropdown-item>Change password</el-dropdown-item>
<el-dropdown-item >
<Inertia-link :href="route('logout')" method="post" as="button" type="button" class="dropdown-item" style="width:100%"><em class="icon ni ni-signout"></em><span>Sign out</span></Inertia-link>
</el-dropdown-item>
</el-dropdown-menu>
</el-dropdown>


</div>
</div>
</a>

</li>

<li class="dropdown">

</li>


<!-- .dropdown -->
</ul><!-- .nk-quick-nav -->
</div><!-- .nk-header-tools -->
</div><!-- .nk-header-wrap -->
</div><!-- .container-fliud -->
</div>




<!-- main header @e -->
<!-- content @s -->

















<div class="nk-content">
<div class="container-fluid">
<div class="nk-content-inner">
<div class="nk-content-body">










  <div class="nk-block-head nk-block-head-sm" v-if="title!=null">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title page-title text-muted" style="font-size:22px;">
            {{ title }}
            </h4>
            <div class="nk-block-des text-soft">
                <p>
                  {{ subtitle }}
                </p>
            </div>
        </div><!-- .nk-block-head-content -->
        <div class="nk-block-head-content">
          <slot name="action"></slot>
        </div><!-- .nk-block-head-content -->
    </div><!-- .nk-block-between -->
</div>













<slot/>











</div>
</div>
</div>
</div>








<!-- content @e -->
<!-- footer @s -->





<div class="nk-footer" style="border:none;">
<div class="container-fluid">
<div class="nk-footer-wrap">
<div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
</div>
<div class="nk-footer-links">
<ul class="nav nav-sm">
<li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
<li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
<li class="nav-item"><a class="nav-link" href="#">Help</a></li>
</ul>
</div>
</div>
</div>
</div>
<!-- footer @e -->
</div>
<!-- wrap @e -->
</div>
<!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->

</div>

</template>
<script>
import MenuSwitch from '../menu/MenuSwitch.vue';
import ModalComponent from '../modals/ModalComponent.vue';
export default {
components:{
MenuSwitch,
ModalComponent,

},

props:{
title:{},
subtitle:{}
},




data(){return{
firstname:null,
message:null,
isLoading:false,
//menus
//user menu
menu:null,
userMenu:[
{name:'Carbon footprint',route:'/footprint',icon:''},
{name:'Carbon offset',route:'/offset',icon:''},
{name:'Projects',route:'/projects',icon:''},
{name:'Activities',route:'activities',icon:''},
{name:'',route:'',icon:''},
],
adminMenu:[],
organisationMenu:[]

//
}},




computed:{
auth(){
const auth=this.$page.props.auth;
const user=auth.user;
const profile=auth.profile;
return {'user':user,'profile':profile};
}


}




}







</script>
<style>


.nk-menu-text{
color:white;
font-weight:normal;
}
.nk-menu-icon .icon{
color:white;
}
.router_menu{
color:black;
}

h2,h2,h3,h4,h5,h6,p{
font-family: system-ui;
}

h2,h2,h3,h4,h5,h6{
letter-spacing: 0.5px;
}
a{
text-decoration:none;
}
input,select{
height:60px;
}

.card{
border:solid 0.1px #EAEDED;
border-radius:10px;
}
.dropdown-item{
margin:0;padding:0;
}
.dropdown-item:hover{
background:none;
}
</style>
