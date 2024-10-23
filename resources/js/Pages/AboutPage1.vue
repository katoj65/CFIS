<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>

<div class="container-fluid feature bg-light py-0">
<div class="container py-3">
<div class="row g-0 p-0">
<div class="col-md-6 col-12 bg-light d-flex align-items-center">
<div class="p-5">
<h5 class=" mb-2">Who We Are</h5>

<p class="mb-0">
The Uganda Carbon Registry was establish to tackle the increasing impact of climate change on Uganda's economy and environment. As climate change effects worsen, Uganda requires a robust system to measure, report, and reduce greenhouse gas emissions while also encouraging the generation of carbon credits and financing solutions for climate action.
</p>








<h5 class="mb-0 mt-3">Our Approach</h5>
<div class="mt-3 mb-3">
<p>
We are dedicated to supporting Uganda’s transition to a low-carbon economy by providing a platform that facilitates the registration, verification, trading of carbon credits and microfinance services. Our goal is to empower businesses, organisations, and communities to reduce their carbon footprint, access carbon finance, and contribute to global climate action.
</p>
</div>



<h5 class="mb-3">
Our Core Services
</h5>
<ol style="padding:0;">
<li>
<p>
<Inertia-link :href="route('about.emission-tracking')">Tracking and reporting green house gas (GHG) emissions.</Inertia-link>
</p>
</li>
<li>
<p>
<Inertia-link :href="route('about.carbon-credit-registration')">Carbon credit registration.</Inertia-link>
</p>
</li>
<li>
<p>
<Inertia-link :href="route('about.verification-certification')">Verification and certification.</Inertia-link>
</p>
</li>
<li>
<p>
<Inertia-link :href="route('about.carbon-redit-trading')">Carbon credit trading.</Inertia-link>
</p>
</li>
<li>
<p>
<Inertia-link :href="route('about.capacity-building-training')">
Capacity building and training.
</Inertia-link>
</p>
</li>
<li>
<p>
Support for sustainable development.
</p>
</li>
<li>
<p>
Technical support and advisory services.
</p>
</li>

<li>
<p>
Loans for carbon mitigation projects.
</p>
</li>
<li>
<p>
Partnerships and collaborations.
</p>
</li>
</ol>


<h5 class="mb-0 mt-5">Looking to Offset Your Emissions?</h5>
<p class="mt-3 mb-5">
We offer tailored solutions to help businesses, organisations, and individuals offset their greenhouse gas (GHG) emissions while contributing to impactful climate action. Whether you are looking to meet sustainability goals, reduce your carbon footprint, or contribute to global efforts to combat climate change, we can guide you through the process. <Inertia-link :href="route('about.carbon-offset-guide')" class="ml-2 text-danger">Read more</Inertia-link>
</p>



<h5 class="mb-0 mt-5">Take Meaningful Climate Action</h5>
<p class="mt-3 mb-2">
Are you ready to take meaningful action against climate change? Purchasing carbon credits is a powerful way to offset your greenhouse gas emissions and support sustainable projects that benefit both the environment and local communities.
</p>
<div>
<Inertia-link :href="route('carbon.purchase-carboncredit')" class="btn btn-danger btn-long" style="border-radius:0;padding:20px;">
Buy Carbon Credit
</Inertia-link>
</div>








<div class="mt-4">
<h5 class="mb-0 mt-5">Unlock Financial Resources for Eco-friendly Projects</h5>
<p class="mt-3 mb-2">
Carbon credit microfinance is an innovative approach that combines microfinance with carbon credit generation to promote sustainability at the grassroots level. This model provides small loans to individuals and communities to invest in eco-friendly projects that reduce greenhouse gas emissions, allowing them to generate carbon credits.<br/>
<Inertia-link :href="route('microfinance.introduction')" class="text-danger">
Credit Microfinance page
</Inertia-link>
</p>
</div>










</div>
</div>






<div class="col-md-6 col-12 bg-light2">
<div class="p-5">
<div class=" p-4">

<h2 class="mb-0 text-uppercase pl-2" style="border-left:solid 5px white;">Empowering Sustainability through data</h2>
<div class="mt-3">
<p class="mb-0">
Accurate data is the foundation of effective climate action. We empower organizations, businesses, and individuals to make informed decisions on emission reduction strategies and track their progress toward carbon neutrality by providing a robust Carbon Footprint Information System.
</p>

</div>
</div>




<div class="counter-item  rounded p-4">
<h5 class="mb-0">  Why Uganda Needs a Carbon Registry</h5>
<div class="mt-3">
<p class="">
Uganda is highly vulnerable to the impacts of climate change, with erratic weather patterns, prolonged droughts, and extreme rainfall affecting key sectors such as agriculture, water resources, and energy. At the same time, Uganda holds enormous potential to mitigate climate change through reforestation, renewable energy, and sustainable agriculture.
</p>
<p class="">
The Uganda Carbon Registry plays a critical role in harnessing this potential by creating a credible, transparent, and accessible market for carbon credits. By doing so, we help Uganda meet its climate goals while providing economic opportunities for local communities.
</p>
</div>

</div>




<div class="counter-item  rounded p-4">
<h5 class="mb-0">Our Impact</h5>
<div class="mt-3">
<ul>
<li>
<p class="">
Enabling access to carbon finance for local communities and businesses through carbon credit generation, trading and microfinance services.
</p>
</li>
<li>
<p class="">
Supporting sustainable land use and protecting Uganda’s forests, wetlands, and other natural resources by promoting carbon offset projects like reforestation and land restoration.
</p></li>
<li>
<p class="">
Empowering communities to adopt climate-smart practices, from clean energy solutions to sustainable agriculture, that not only reduce emissions but also improve livelihoods.
</p></li>
<li>
<p class="">
Enhancing transparency in Uganda’s carbon market by ensuring that emissions reductions are tracked, verified, and reported with integrity.
</p>
</li>

<li>
<p class="">
Strengthens Uganda’s carbon economy, making it a more attractive destination for international carbon finance and helping to position the country as a leader in climate action on the African continent.
</p>
</li>



<li>
<p class="">
Creating green jobs. Projects funded through microfinance, such as clean energy installations or forest restoration, create employment opportunities, particularly in rural areas where jobs are often scarce.
</p>
</li>


<li>
<p class="">
Boosting local investment. As carbon credits are sold and revenues are reinvested, local economies benefit from the multiplier effect, as income generated from climate projects is spent within communities, stimulating economic growth.
</p>
</li>
</ul>


<div class="pl-5 pr-5 py-4 mt-5">
<h3 class="mb-3">Get Involved</h3>
<p class=" mb-4">
Whether you are an individual, business, farmer, or community organization, you can be part of the solution. Join us in our mission to fight climate change, improve livelihoods, and build a sustainable future for Uganda.
</p>
<p>
<Inertia-link :href="route('login')" class="btn btn-danger btn-lg border-0">Create Account</Inertia-link>
</p>
</div>



</div>
</div>




</div>
</div>
</div>
</div>
</div>

















</landing-layout>
</template>
<script>
import BannerComponent from '../components/BannerComponent.vue';
import LandingLayout from '../Layouts/LandingLayout.vue';
export default {
components: {
LandingLayout,
BannerComponent
},
data(){return{
subtitle:"The Uganda Carbon Registry was established to address the need for effective climate action in Uganda. It supports the country's transition to a low-carbon, sustainable economy by providing a platform for individuals, businesses, and organisations to reduce their carbon footprints.",



}},


computed:{
url(){
return this.$page.props.system.url;
}


}





}
</script>
<style scoped>
ul li, ol li{
list-style-type:circle;
margin-bottom: 10px;
}
h1,h2,h3,h5,h5,h6{
letter-spacing: 0.3px;
}

</style>