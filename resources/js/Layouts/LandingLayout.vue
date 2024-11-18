<template>
<div style="padding:0;margin:0;">

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 bg-green-dark navbar-dark fixed-top">
    <div class="col-md-3 mb-2 mb-md-0">
      <Inertia-link :href="route('home')" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="http://localhost/carbon/public/images/logos/logo-with-red.png" class="logo img-fluid ml-3">
      </Inertia-link>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><Inertia-link :href="route('home')" class="nav-link px-2 text-white">Home</Inertia-link></li>
        <li><Inertia-link :href="route('about')" class="nav-link px-2 text-white">About</Inertia-link></li>
        <li><Inertia-link :href="route('microfinance.introduction')" class="nav-link px-2 text-white">Carbon Fund</Inertia-link></li>
        <li><Inertia-link :href="route('news.index')" class="nav-link px-2 text-white">Press</Inertia-link></li>
        <li><Inertia-link :href="route('contact')" class="nav-link px-2 text-white">Contact</Inertia-link></li>

    </ul>

    <div class="col-md-3 text-end">
      <Inertia-link :href="route('login')" class="btn btn-outline-light me-2">Login</Inertia-link>
    </div>
  </header>
<div class="row">
<div class="col-12">

</div>
</div>
<main>
<slot></slot>
</main>

<footer class="bg-white" style="border-top:solid 1px #f2f3f4">
<div class="row pt-5">
<div class="col-12 col-md-8 offset-lg-2">
<div class="row">
<div class="col-12 col-md-1">
<ul class="list-unstyled text-small mt-3">
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-facebook" style="font-size:30px;"></i></a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#">
<i class="bi bi-whatsapp" style="font-size:30px;"></i>
</a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#">
<i class="bi bi-instagram" style="font-size:30px;"></i>
</a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-twitter-x" style="font-size:30px;"></i></a></li>
<li class="mb-3"><a class="link-secondary text-decoration-none" href="#"><i class="bi bi-linkedin" style="font-size:30px;"></i></a></li>
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
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Policies and Regulations</a></li>
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
<li class="mb-1">
<Inertia-link class="link-secondary text-decoration-none" :href="route('news.index')">Press</Inertia-link></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Carbon Offest Projects</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">
Carbon Credit</a></li>
<li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Investiment Opportunities</a></li>
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
min-height: 550px;
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