<template>
<body style="padding-top:65px;">

            <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0 bg-dark" style="border-bottom:none;position:fixed;width:100%;border-radius:0;">
                <a :href="route('home')" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                    <h5 class="m-0 text-white" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Uganda Carbon Registry
                        <img src="http://localhost/carbon/public/images/logos/logo-with-red.png" class="logo img-fluid ml-3" style="position:absolute;margin-top:8px;">
                        <div style="font-weight:normal;font-size:12px;padding-top:4px;">
                            Empowering sustainability through data
                        </div>
                    </h5>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <inertia-link :href="route('home')" class="nav-item nav-link text-white" style="font-size:15px;">Home</inertia-link>
                        <inertia-link :href="route('about')" class="nav-item nav-link text-white" style="font-size:15px;">About</inertia-link>
                        <inertia-link :href="route('carbon-credit')" class="nav-item nav-link text-white" style="font-size:15px;">Carbon Credit</inertia-link>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" style="font-size:15px;">Microfinance</a>
                            <div class="dropdown-menu fade-up m-0">
                                <Inertia-link :href="route('microfinance.introduction')" class="dropdown-item" style="font-size:15px;padding:10px;">
                                    Introduction</Inertia-link>
                                <Inertia-link :href="route('microfinance.loan-application-page')" class="dropdown-item" style="font-size:15px;padding:10px;">Apply for a Loan</Inertia-link>
                                <Inertia-link :href="route('sponsor.project')" class="dropdown-item" style="font-size:15px;padding:10px;">
Sponsor a Project
                                </Inertia-link>
                                <Inertia-link :href="route('partner.microfinance-partnership')" class="dropdown-item" style="font-size:15px;padding:10px;">
                                Partnerships
                                </Inertia-link>
                                <Inertia-link :href="route('microfinance.fundraising')"  class="dropdown-item" style="font-size:15px;padding:10px;">
                                    Start a Fundraiser
                                </Inertia-link>

                            </div>
                        </div>
                        <inertia-link :href="route('contact')" class="nav-item nav-link text-white" style="margin-right:15px;margin-left:-25px;font-size:15px;">Contact</inertia-link>


                    </div>
                    <inertia-link :href="route('login')" class="btn btn-warning py-4 px-lg-5 d-none d-lg-block" style="border-radius:0;font-size:15px;">Login</inertia-link>
                </div>
            </nav>




<div>
<slot/>

</div>









 <!-- Footer Start -->
<div class="container-fluid footer bg-dark " style="margin:0;">
<div class="container py-5">
<div >
<h3 class="mb-4 text-white" >
Partners
</h3>
</div>
<div class="row text-white mb-5 pb-4" style="border-bottom:solid thin #283747;">
<div class="col-4 col-md-2 m-2">
<img :src="image_url+'logo.png'" style="width:50px;">
</div>
</div>



<div class="row footer-inner">
<div class="col-md-6 col-lg-6 col-xl-3">
<div class="footer-item mt-5">
<h4 class="text-light mb-4">
<img :src="logo" style="width:100px;">
</h4>
<p class="mb-4 text-secondary">Uganda Carbon Registry is committed to empowering individuals,
     businesses, and communities to reduce their carbon footprints....</p>
<a href="" class="btn btn-danger py-2 px-4">Donate Now</a>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
<div class="footer-item mt-5">
<h4 class="text-light mb-4">Find Us</h4>
<div class="d-flex flex-column">
<h6 class="text-secondary mb-0">Our Address</h6>
<div class="d-flex align-items-center border-bottom py-4">
<b-icon icon="pin-map-fill" aria-hidden="true" class="text-white" scale="1.5"></b-icon>

<span class=" pl-2" style="color:white;">Masajja Division, Wakiso District</span>
</div>
<h6 class="text-secondary mt-4 mb-0">Our Contact</h6>
<div class="d-flex align-items-center py-4">
    <b-icon icon="telephone-fill" aria-hidden="true" class="text-white" scale="1.5"></b-icon>
<span class=" pl-2" style="color:white;">+256 752567534</span>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
<div class="footer-item mt-5">
<h4 class="text-light mb-4">Explore Link</h4>
<div class="d-flex flex-column align-items-start">
<Inertia-link class="text-white mb-2" :href="route('home')">Home</Inertia-link>
<Inertia-link class="text-white mb-2" :href="route('about')">About Us</Inertia-link>
<a class="text-white mb-2" href="">Carbon Credit</a>
<a class="text-white mb-2" href="">Microfinance</a>
<Inertia-link class="text-white mb-2" :href="route('contact')">Contact us</Inertia-link>

</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
<div class="footer-item mt-5">
<h4 class="text-light mb-4">Stay Connected</h4>
<ul style="padding:0;" class="social">
<li>
<a class="text-white mb-2" href="">
<b-icon icon="facebook" class="mr-2"></b-icon> Facebook</a>
</li>
<li>
<a class="text-white mb-2" href=""><b-icon icon="twitter" class="mr-2"></b-icon>Twitter</a>
</li>
<li>
<a class="text-white mb-2" href=""><b-icon icon="linkedin" class="mr-2"></b-icon>LinkedIn</a>
</li>
<li>
<a class="text-white mb-2" href=""><b-icon icon="instagram" class="mr-2"></b-icon>Instagram</a>
</li>
</ul>
</div>
</div>
</div>
</div>

</div>
<!-- Footer End -->


</body>
</template>
<script>
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
}



}




}
</script>
<style>
.cover{
background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
height: 500px;
background-size: cover;
background-position: 100% 40%;
margin:0;

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