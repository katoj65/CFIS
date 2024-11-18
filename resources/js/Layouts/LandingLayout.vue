<template>
<div style="padding:0;margin:0;">
<header class="py-2 bg-green-dark" style="border-bottom:none;border-radius:0;z-index:100000;">
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

<footer class="bg-white">
<div class="row pt-5">
<div class="col-12 col-md-8 offset-lg-2">
<div class="row">
<div class="col-6 col-md-1">
<ul class="list-unstyled text-small mt-3">
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-facebook" style="font-size:40px;"></i></a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#">
  <i class="bi bi-whatsapp" style="font-size:40px;"></i>
</a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#">
  <i class="bi bi-instagram" style="font-size:40px;"></i>
</a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-twitter-x" style="font-size:40px;"></i></a></li>
</ul>
</div>






<div class="col-6 col-md-3">
<h5>Resources</h5>
<ul class="list-unstyled text-small mt-3">
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Environment Hub</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Projects</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Carbon Footprint</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Carbon Markets</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Get Involved</a></li>
</ul>
</div>




<div class="col-6 col-md-4">
  <h5>Useful Links</h5>
  <ul class="list-unstyled text-small mt-3">
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">User Guide</a></li>
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Create Account</a></li>
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Project Developers</a></li>
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Partners</a></li>
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Funding Opportunities</a></li>
  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Careers </a></li>
  </ul>
  </div>

 <div class="col-6 col-md-4">
        <h5>About</h5>
        <ul class="list-unstyled text-small mt-3">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Overview</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Carbon Fund</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Carbon Offest Projects</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
            Carbon Credit</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Investiments </a></li>
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
.list-unstyled li {
margin-bottom:20px;
}
</style>