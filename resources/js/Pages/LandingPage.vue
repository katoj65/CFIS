<template>
<landing-layout>
<section class="py-5">
<div class="container position-relative z-2 mt-3 mt-sm-4 mt-md-1">
<div class="row pt-xl-3 pt-xxl-4">
<div class="col-lg-7 col-xxl-6">
<h1 class="display-3 text-center text-lg-start title-font" style="font-size:50px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
<span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">CONTRIBUTE TO <br/>A SUSTAINABLE</span> <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> FUTURE</span> <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;color:white;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">NOW!</span>
</h1>

</div>
<div class="col-lg-5 offset-xxl-1 pt-sm-3">

<div class="row mt-5">
<div class="col-12 col-md-4 mt-5">
<img src="http://localhost/carbon/public/images/antonio_guterres.png">
</div>
<div class="col-12 col-md-6">

<div style="position:absolute;bottom:10px;background:white;">
<h6 class="p-0 m-0" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Antonio Guterres</h6>
<p class="text-secondary" style="padding:0;margin:0;line-height:20px;">UN Secretary General</p>
</div>
</div>
<div class="col-12">
<p class="fs-lg text-left text-lg-start pb-3 pb-sm-0 pb-md-2 mb-4 mb-sm-5 text-danger" style="font-size:18px;line-height:30px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
"The Era of Global Warming has Ended: The Era of Global Boiling Has Arrived."
</p>
</div>
</div>





<!-- Contact form -->

</div>
</div>
</div>

<!-- Parallax image -->

</section>



<section>
<div class="container-fluid py-5 p-0 bg-dark2">
<div class="row g-0">
<div class="col-12 col-md-12">

<section>
<div class="container">
<div class="row">
<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
    <div class="text-center mb-8">

        <h2 class="mb-3 mt-3 text-white">
            <span class="section_title1"> OUR MISSION</span>
        </h2>
        <p class="mb-0 px-lg-6 text-white" style="font-size:16px;">
            We’re on an ambitious mission to turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda. It's time to unite and reduce emissions, protect ecosystems, and invest in sustainable solutions.
        </p>
        <div class="p-3">
            <Inertia-link  :href="route('about')" class="btn btn-outline-light" style="border:solid 2px white;border-radius:20px;font-weight:bold;"> Get To Know Us <i class="bi bi-arrow-right"></i></Inertia-link>
        </div>
    </div>
</div>
</div>

</div>
</section>
</div>
<div class="col-12 col-md-4"></div>
</div>
</div>

</section>





























<section>
<div class="container-xxl py-5">
<div class="container">
<div class="row">
<div class="col-10 offset-lg-1">
<div class="row g-5">
<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<div class="border-start border-5 border-danger ps-4 mb-5">
<h6 class="text-body text-uppercase mb-2">
<span class="text-danger">    Why Choose Us!</span>
</h6>
<h1 class="display-6 mb-0">
<span class="section_title1">
 Leading the Way in Climate Action
</span>
</h1>
</div>
<p class="mb-5">
The Uganda Carbon Registry is at the forefront of climate action, providing a comprehensive system for tracking, reducing, and offsetting greenhouse gas emissions.
By enabling individuals, businesses, and organizations to measure their carbon footprints and generate carbon credits, the registry creates a transparent and structured approach to carbon management.
</p>

<el-collapse accordion style="margin-top:-20px;">
<el-collapse-item :name="key" v-for="(s,key) in services" :key="key">
<template slot="title">
<h6><span class="section_title1"> {{ s.title }}</span> </h6>
</template>
<div>
<p>{{ s.description }}

<Inertia-link :href="route(s.url)" class="btn btn-clear text-danger p-0" style="font-size:14px;">
Read more<i class="bi bi-arrow-right ml-1"></i></Inertia-link>

</p>
</div>
</el-collapse-item>
</el-collapse>

</div>



<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
<div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 300px">
<img class="position-absolute w-100" src="http://localhost/carbon/public/images/deforestation.jpeg" alt="" style="object-fit: cover;height:500px;">
<div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;border-radius:20px;">


<div class="d-flex flex-column justify-content-center text-center bg-dark2 h-100 p-3" style="border-radius:20px;">
<h1 class="text-white">22%</h1>
<h2 class="text-white">Emission</h2>
<h5 class="text-white mb-0">Reduction By 2030</h5>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>















<section class="text-light row bg-light2 py-2" style="border-top:solid 1px  #e9edf0;">
<div class="container pb-md-6 pt-2">
<div>
<div class="offset-lg-1 col-10">
<div class="row mt-4">

<div class="col-12 col-md-4" v-for="(s,key) in botton_section" :key="key">
<div class="card border-0 bg-light2">
<div class="card-body p-4">

<div class="mb-2">
<h5 class="card-title">
<span class="section_title1">{{ s.title }}</span>
</h5>
<p class="mb-0 card-text">
{{ s.description }}
</p>
</div>
<Inertia-link :href="route(s.url)" class="btn btn-clear text-danger p-0">
{{ s.link}}<i class="bi bi-arrow-right"></i></Inertia-link>

</div>
</div>
</div>






<el-divider></el-divider>
<div class="col-12">
<!--Stats start-->
<section class="py-2">
<div class="container pb-4">
<div class="row">
<div class="col-lg-3 col-6">
<div class="text-center px-lg-5 mb-5 mb-lg-0">
<small class="text-uppercase  ls-md fw-semibold text-dark2 bold">Active Clients</small>
<h2 class="mb-0 mt-2">{{ response.clients }} </h2>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center px-lg-5 mb-5 mb-lg-0">
<small class="text-uppercase  ls-md fw-semibold text-dark2 bold">Projects</small>
<h2 class="mb-0 mt-2">{{ response.projects }} </h2>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center px-lg-5 mb-5 mb-lg-0">
<small class="text-uppercase ls-md fw-semibold text-dark2 bold">Project Developers
</small>
<h2 class="mb-0 mt-2">{{ response.developers }} </h2>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center px-lg-5 mb-5 mb-lg-0">
<small class="text-uppercase ls-md fw-semibold text-dark2 bold">Impact Created</small>
<h2 class="mb-0 mt-2">30%</h2>
</div>
</div>
</div>
</div>
</section>
</div>








</div>

</div>
</div>

</div>
</section>






<!--testmonial start-->
<section class="bg-white py-5" style="border-top:solid 1px  #e9edf0;">
<div class="container">
<div class="col-xxl-8 offset-xxl-2 col-md-12">
<div class="row align-items-center">
<div class="col-md-4">
    <div class="mb-5 mb-lg-0">
        <img src="http://localhost/carbon/public/images/lagarde.png" alt="textmonial" class="img-fluid rounded-3" />
    </div>
</div>
<div class="col-md-8">
    <div class="mb-4">
        <p class="lead text-dark me-xl-6">
            “The longer we delay, the more we will pay. And the higher the cost will be—not just financially, but in human lives, in livelihoods, and in lost opportunities.”
        </p>
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <h5 class="mb-0">Christine Lagarde</h5>
            <small>President of the European Central Bank</small>
        </div>
        <div>
            <figure>
                <img src="http://localhost/carbon/public/images/eu.png" alt="brand" style="width:50px" />
            </figure>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!--testmonial end-->






<!--location-->
<section class="mb-xl-9 py-5 bg-light2" style="border-top:solid 1px  #e9edf0;">
<div class="container">

<div class="text-center mb-xl-7 mb-5">
<small class="text-uppercase ls-md fw-semibold text-danger">News and Updates</small>
<h2 class="my-3 text-white-stable"><span class="title-font2">STAY AHEAD OF THE CURVE</span></h2>
<p class="mb-0 text-body" style="padding-left:25%;padding-right:25%;">
The climate crisis has never been more urgent, and with every new headline, the impacts on our planet and our future become clearer.</p>
</div>



<div class="row g-4">





<div class="col-md-3 col-12" v-for="(n,key) in 4" :key="key">
<div class="bg-white card border-0 p-3">

<figure class="mb-3 card-lift">
<img src="http://localhost/carbon/public/images/deforestation.jpeg" class="img-fluid" />
</figure>
<div>
<h6>Some title</h6>
<div class="ms-2">
<span>WeWork, 412, Residency Rd, Shanthala Nagar,
Ashok Nagar, Bengaluru, Karnataka 560025</span>
</div>
</div>
</div>
</div>





</div>

</div>
</section>
<!--location-->






<!--Call to action start-->
<section class="my-lg-7 py-2 bg-light2">
<div class="container">
<div class="row bg-pattern rounded-3 py-lg-7 py-5 g-0">
<div class="col-md-8 offset-md-2">
<div class="text-center position-relative z-1 px-5"
>
<div class="mb-5">
    <h3 class="h2 text-white-stable mb-3">
    <span class="title-font2 text-uppercase"> Ready to Take Action?</span>
    </h3>
    <p class="mb-0 text-white-stable">
    Take action today: Measure your carbon footprint, set ambitious goals, and be part of Uganda's climate solution. Together, we can build a sustainable, climate-resilient future for all.
    </p>
</div>



<form
class="row d-flex justify-content-center mb-6 needs-validation"
novalidate @submit.prevent="email_subscription">
<div class="col-lg-6">
    <label for="subscribeEmail"
        class="visually-hidden">Email</label>
    <div class="input-group has-validation">
        <input type="text" id="subscribeEmail"
            class="form-control border-danger"
            placeholder="Enter your business email"
            aria-label="Enter your business email"
            aria-describedby="basic-addon2"
            required v-model="form.email" />
        <button class="btn btn-danger"
            type="submit" id="basic-addon2">Join
            Now</button>
        <div class="invalid-feedback text-start">
            Please choose a email.</div>
    </div>
</div>
</form>







</div>
</div>
</div>
</div>
</section>
<!--Call to action end-->








<div class="swal2-container swal2-center swal2-backdrop-show" v-if="success==true" >
<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
<div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
<span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
<div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
<div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">

</div>
</div>
<img class="swal2-image" style="display: none;">
<h2 class="swal2-title" id="swal2-title" style="display: flex;">Successful!</h2>
<button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
</div>
<div class="swal2-content">
<div id="swal2-content" class="swal2-html-container" style="display: block;">
{{ $page.props.flash.success }}
</div>

</div>
<div class="swal2-actions">
<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(30, 224, 172); border-right-color: rgb(30, 224, 172);" @click="success=false">OK</button>

</div>
</div>
</div>




</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import LinkPointerComponent from '../components/LinkPointerComponent.vue';

export default {
components: {
LandingLayout,
BannerComponent,
LinkPointerComponent

},

props:{
response:{}
},




data(){return{
icon_directory:this.$page.props.system.icon_directory,
success:false,
tab:[
{title:'Emission Tracking',description:'Managing your carbon emissions helps protect the environment and builds a sustainable future.'},
{title:'Carbon Markets',description:'investing in carbon credits can offset your carbon footprint and support projects that reduce emissions and protect the environment.'},
{title:'Project Development',description:'Partner with us to develop projects that reduce emissions, benefit communities, and create a greener future.'},
{title:'Carbon Fund',description:'Save, borrow, and fund for a sustainable future! Your actions can power eco-friendly projects, reduce emissions, and uplift communities.'},
],

//links
links:[
{name:'Carbon Emissions in Uganda',url:'emissions.uganda'},
{name:'Buy or Sell Carbon Credit',url:'emissions.uganda'},
{name:'Become a project developer',url:'emissions.uganda'},
{name:'News and Updates',url:'emissions.uganda'},
{name:'Community Connections',url:'emissions.uganda'},
{name:'See Our Partners',url:'emissions.uganda'},

],

stepper:[
{title:'Measure and Assess Your Carbon Emissions'},
{title:'Set Your Carbon Emission Reduction Target'},
{title:'Implement Your Carbon Reduction Strategies'},
{title:'Offset Your Carbon Emissions'},
{title:'Monitor and Report Your Progress'},

],



//form
form:this.$inertia.form({
email:''
}),


}},




methods:{
//email subscription
email_subscription(){
this.success=false;
this.form.post(route('subscription.email'),{
onSuccess:()=>{
this.success=true;
this.form.reset();
}
});






}




},




computed:{
url(){
return this.$page.props.system.url;
},

//
botton_section(){
return[
{title:'Measure Carbon Footprint',
description:'Start your carbon mitigation journey by accurately measuring your carbon emissions. With real-time monitoring, track and reduce your environmental impact efficiently.',
link:'Calculate Your Emissions',url:'carbon.footprint'},

{title:'Manage Carbon Emissions',
description:'Implement comprehensive carbon management strategies to lower emissions, optimize resource use, and meet sustainability goals while boosting operational efficiency.',
link:'Create Your Carbon reductionstrategy',url:'emissions.uganda'},

{title:'Offset Carbon Emissions',
description:'Invest in certified carbon offset projects that reduce emissions elsewhere, balancing out your carbon footprint and contributing to global climate action.',
link:'Invest in Carbon Reduction',url:'carbon.offestting'},

{title:'Carbon Markets',
description:'Tap into carbon markets by buying and selling carbon credits, turning emission reductions into financial value and supporting global climate initiatives.',
link:'Get Access to Carbon Markets',url:'market.overview'},

{title:'Carbon Fund',
description:'Access funding tailored for climate-friendly projects, empowering local communities to implement low-carbon solutions and green technologies.',
link:'Finance Your Emission Reduction Plan',url:'microfinance.overview'},

{title:'Education Hub',
description:'Equip yourself and your community with the knowledge needed to tackle climate challenges through an accessible environmental education hub focused on carbon mitigation and sustainability.',
link:'Empower Yourself with Knowledge',url:'hub.welcome'},

];

},

//services menu
services(){
return[
{title:'Carbon Footprint Management',
description:'Tools to help businesses, organizations, and individuals track, measure, and reduce carbon emissions to contribute to national emission reduction targets and Uganda’s NDCs under the Paris Agreement.',
url:'cfis.overview'
},
{title:'Carbon Fund',
description:'Get access to financial resources to invest in projects aimed at reducing greenhouse gas emissions, generating carbon credits that can be sold in carbon markets.',
url:'market.overview'
},
{title:'Carbon Markets',
description:'Entities can use the registry to participate in carbon markets, buying and selling carbon credits to offset their emissions and support greenhouse gas reduction projects, assisting Uganda in meeting its climate commitments.',
url:'microfinance.overview'
},
{title:'Carbon Offset Projects',
description:'Facilitating the development of carbon offset projects that decrease or eliminate emissions, such as reforestation and clean energy initiatives. These projects produce carbon credits, promoting sustainable practices and contributing to Uganda’s low-carbon growth path.',
url:'projects.overview'
}










];
}






},





}
</script>
<style scoped>
.cover{
background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
background-size: cover;
background-position: 100% 100%;
margin:0;

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

}

.form-control-wrap{
margin-bottom:10px;
}
</style>