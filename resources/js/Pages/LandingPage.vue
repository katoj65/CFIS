<template>
<landing-layout>
<section class="cover">
<div class="row mt-5 pt-5">
<div class="col-12 col-md-8 offset-lg-1 pt-5 mt-5">
<h1 class="display-3 text-center text-lg-start title-font" style="font-size:40px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
<span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:white; text-shadow: 3px 5px 5px black;">CONTRIBUTE TO <br/>A SUSTAINABLE</span> <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:white;text-shadow: 3px 4px 4px black;"> FUTURE</span>

<div style="margin-top:10px;">
<span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;color:white;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;border:solid 6px black;border-left:0;border-top:0;">NOW!</span>
</div>


</h1>
</div>
</div>
</section>







<section id="contact" class="bg-green-light">
<div class="container section-title" data-aos="fade-up">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<h2 class="text-dark">Our Mission</h2>
<p> At Uganda Carbon Registry (UCR), we’re on an ambitious mission to turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda. Through innovative carbon offset projects and sustainable practices, we aim to create lasting value for Ugandan communities, fostering green growth, resilience, and a thriving environment for future generations. </p>
<div class="row mt-3 py-5" style="margin-bottom:-60px;">
<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0" style="border-radius:20px;background:#15583b;">
<div style="margin-bottom:10px;">
<i class="bi bi-people-fill text-white" style="font-size:50px;"></i>
</div>
<small class="text-uppercase  ls-md fw-semibold bold text-white" style="font-size:20px;">Subscribers</small>
<h4 class="mb-0 mt-2 text-white" style="font-size:35px; padding-bottom:15px;">{{ response.clients }} </h4>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0" style="border-radius:20px;background:#15583b;">
<div style="margin-bottom:10px;">
<i class="bi bi-diagram-3-fill text-white" style="font-size:50px;"></i>
</div>
<small class="text-uppercase  ls-md fw-semibold bold text-white" style="font-size:20px;">Projects</small>
<h4 class="mb-0 mt-2 text-white" style="font-size:35px;padding-bottom:15px;">{{ response.projects }} </h4>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0" style="border-radius:20px;background:#15583b;">
<div style="margin-bottom:10px;">
<i class="bi bi-person-lines-fill text-white" style="font-size:50px;"></i>
</div>
<small class="text-uppercase ls-md fw-semibold bold text-white" style="font-size:20px;">
Developers
</small>
<h4 class="mb-0 mt-2 text-white" style="font-size:35px;padding-bottom:15px;">{{ response.developers }} </h4>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0" style="border-radius:20px;background:#15583b;">
<div style="margin-bottom:10px;">
<i class="bi bi-tree-fill text-white" style="font-size:50px;"></i>
</div>
<small class="text-uppercase ls-md fw-semibold bold text-white" style="font-size:20px;">Impact Created</small>
<h4 class="mb-0 mt-2 text-white" style="font-size:35px;padding-bottom:15px;">30%</h4>
</div>
</div>
</div>

</div>
</div>
</div>
</section>







<section class="py-3" style="background:#15583b;">
<div style="">
<div class="container my-lg-7">
<div class="row">
<div class="col-lg-8 offset-lg-2">
<div class="text-center mb-3">
<h1 class="text-white-stable mb-3 pt-4 text-white">
Pioneering Climate Action</h1>
<div>

<div class="py-1">
<p class="mb-0 text-left text-white">
At the heart of our mission lies a comprehensive Carbon Registry designed to track, verify, and manage carbon credits across diverse sectors of the economy. UCR aims to align with COP29 UN guidelines by driving efforts to reduce greenhouse gas emissions and laveraging carbon registries and credit systems to promote sustainable practices and provide financial support for climate initiatives.
</p>
<div class="mt-3">
<Inertia-link :href="route('climate_action')" class="btn text-white" style="border:solid 2px white;background:none;">
Read More
</Inertia-link>
</div>
</div>

<!-- Accordion flush -->




</div>
</div>
</div>
</div>
</div>
</div>
</section>











<section id="services" class="services section bg-green-light">
<div class="container section-title aos-init aos-animate" data-aos="fade-up">
<h2 class="text-dark">Services</h2>
<p>Our services are tailored to support your climate goals.</p>
</div>
<div class="content">
<div class="container">
<div class="row">
<div class="col-12 col-md-10 offset-lg-1">
<div class="row g-0">
<div class="col-lg-3 col-md-6" v-for="(s,key) in services" :key="key" style="border:none;">
<div class="service p-3 text-center" style="border:none;">
<div class="service-item-icon" style="border:none;">
<img :src="icons+s.icon" style="width:90px;"/>
</div>
<div class="service-item-content mt-3" style="border:none;">
<Inertia-link :href="route(s.url)"><h5 class="service-heading">{{ s.title }} </h5></Inertia-link>
<p style="font-size:14px;">
{{ s.description }}
</p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>



<section class=" py-5" style="background:#15583b;">
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
<p class="lead me-xl-6 text-white">
“The longer we delay, the more we will pay. And the higher the cost will be—not just financially, but in human lives, in livelihoods, and in lost opportunities.”
</p>
</div>
<div class="d-flex justify-content-between">
<div>
<h5 class="mb-0 text-white">Christine Lagarde</h5>
<small class="text-white">President of the European Central Bank</small>
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



<section class="bg-green-light">
<div class="container section-title aos-init aos-animate" data-aos="fade-up">
<h2 class="text-dark">Press Release</h2>
<p>Stay Informed, Stay Empowered: Climate News Matters.</p>
</div>
<div class="container">
<div class="row">
<div class="col-12 col-md-10 offset-lg-1">
<div class="row">
<div class="col-12 col-md-4" v-for="(n,key) in  news" :key="key">
<b-card  :img-src="images+'/'+n.file" img-alt="Image" img-top tag="article" style="max-width: 20rem;" class="mb-2 border-0 shadow-sm">
<b-card-text style="height:230px;padding:10px;">
<h6>
{{n.title}}
</h6 >
<div>
{{ n.description }}
</div>
</b-card-text>
</b-card>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="my-lg-7 py-2 bg-dark">
<div class="container">
<div class="row bg-pattern rounded-3 py-lg-7 py-5 g-0">
<div class="col-md-8 offset-md-2">
<div class="text-center position-relative z-1 px-5"
>
<div class="mb-5">
<h3 class="h2 text-white-stable mb-3">
<span class="text-white"> Ready to Take Action?</span>
</h3>
<p class="mb-0 text-white-stable text-white">
Take action today: Measure your carbon footprint, set ambitious goals, and be part of Uganda's climate solution. Together, we can build a sustainable, climate-resilient future for all.
</p>
</div>

<form class="row d-flex justify-content-center mb-6 needs-validation" @submit.prevent="email_subscription">
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
LinkPointerComponent,


},

props:{
response:{}
},




data(){return{
news:this.response.news.data,
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
{title:'Measure Carbon',
description:'Use carbon tracking tools to measure and reduce emissions, making your sustainability goals achievable and verifiable.',
link:'Calculate Your Emissions',url:'carbon.footprint'},

{title:'Manage Carbon Emissions',
description:'Implement comprehensive carbon management strategies to lower emissions, optimize resource use, and meet sustainability goals while boosting operational efficiency.',
link:'Create Your Carbon reduction Strategy',url:'emission.manage'},

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
{title:'Carbon Footprint',
description:'Track, analyse, and reduce your emissions with Uganda Carbon Registry’s tools and expert guidance.',
url:'carbon.footprint',
icon:'footprint.png'
},
{title:'Carbon Credits',
description:'Generate, trade, and retire verified carbon credits to support climate action and sustainable development.',
url:'carbon-credit',
icon:'carbon_credit.png'
},
{title:'Policy Support',
description:'Align your projects with national climate goals through tailored guidance and regulatory expertise.',
url:'climate_policy',
icon:'policy.png'
},
{title:'Public Outreach',
description:'Engage with Uganda Carbon Registry to learn, act, and contribute to building a sustainable future.',
url:'climate_outreach',
icon:'outreach.png'
},
{title:'Climate Financing',
description:'Our climate finance service provides funding solutions to support your projects in reducing emissions and building resilience.',
url:'climate_finance',
icon:'climate_finance.png'
},
{title:'Compliance Support',
description:'Navigate regulatory requirements, ensuring your projects meet climate standards and align with legal frameworks.',
url:'climate_compliance',
icon:'compliance.png'
},
{title:'Collaboration Tools',
description:'We offer collaboration tools for seamless project coordination, data sharing, and transparent communication to support climate action.',
url:'climate_collaboration',
icon:'collaboration.png'
},
{title:'Research & Innovation',
description:'The Uganda Carbon Registry drives research and innovation, enhancing climate action through efficient carbon tracking and credits.',
url:'projects.overview',
icon:'innovation_research.png'
}





];
},



news(){
const articles=[];
let content=this.response.news;
content.forEach(element => {
articles.push({
title:element.title,
description:element.description.length>130?element.description.substring(0, 130)+'...':element.description,
id:element.id,
created_at:element.created_at,
file:element.file
});
});
return articles;
},



update(){
return this.response.update;
},



icons(){
return this.$page.props.system.icon_directory;
},

images(){
return this.$page.props.system.image_directory;
}




},





}
</script>
<style scoped>
.cover{
background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
background-size: cover;
background-position: 100% 50%;
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

ol li{
list-style-type:lower-roman;
}
</style>