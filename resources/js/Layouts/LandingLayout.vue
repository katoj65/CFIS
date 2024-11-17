<template>
<div style="padding:0;margin:0;">
<header class="py-2" style="border-bottom:none;border-radius:0;background:#1A374D;z-index:100000;">
<div class="row pb-2">
<div class="col-10 offset-lg-1">
<div class="d-flex flex-column flex-md-row align-items-center">
<Inertia-link :href="route('home')" class="p-2 d-flex align-items-center link-body-emphasis text-decoration-none">
<img src="http://localhost/carbon/public/images/logos/logo-with-red.png" class="logo img-fluid ml-3" style="position:absolute;margin-top:8px;">
<span class="fs-4 ml-5 pl-5">
<!-- <span class="ml-3 text-bold" style="font-size:18px;font-weight:bolder;color:white"> Uganda Carbon Registry</span> -->
</span>
</Inertia-link>

<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
<Inertia-link class="me-3 py-2 link-body-emphasis text-decoration-none text-white" :href="route('about')">About</Inertia-link>
<Inertia-link class="me-3 py-2 link-body-emphasis text-decoration-none text-white" :href="route('microfinance.introduction')">Carbon Fund</Inertia-link>
<Inertia-link class="me-3 py-2 link-body-emphasis text-decoration-none text-white" :href="route('contact')">Contacts</Inertia-link>
<Inertia-link class="me-3 py-2 link-body-emphasis text-decoration-none text-white" :href="route('login')">Login</Inertia-link>
</nav>
</div>
</div>
</div>
</header>
<div class="row">
<div class="col-12">

</div>
</div>
<main>
<slot></slot>
</main>

<footer class="bg-light border-top">
<div class="row pt-5">
<div class="col-12 col-md-8 offset-lg-2">
<div class="row">
<div class="col-6 col-md-4">
<h5>Features</h5>
<ul class="list-unstyled text-small">
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
</ul>
</div>
<div class="col-6 col-md-4">
<h5>Resources</h5>
<ul class="list-unstyled text-small">
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
</ul>
</div>

 <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>





</div>
</div>
</div>
</footer>







</div>
</template>
<script>
import { Inertia } from '@inertiajs/inertia';


export default {
components:{},
data(){return{


}},

computed:{
image_url(){
return this.$page.props.system.url+'public/images/';
},

logo(){
return this.$page.props.system.url+'public/images/logos/logo-with-red.png';
},



},





}
</script>
<style>
.cover{
background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
min-height: 450px;
background-size: cover;
background-position: 100% 50%;
margin:0;
background-attachment: fixed;

}
.nav-item .link{
color:white;
font-size:17px;

}

a{
text-decoration: none;
}
.nav-item{

padding-right:25px;
color:black;
}
.nav-item .link:hover{
color:black;
}
h1,h2,h3,h4,h5,h6{
letter-spacing: 1px;
}

#heading{
background:black;
opacity: 0.81;
}
.social li{
margin-bottom:15px;
}

</style>