<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<div class="container py-4">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div class="py-3">
<h5 class="mb-4">Why Measure Your Carbon Footprint?</h5>
<ul>
<li>
<h6>
Drive Sustainability
</h6>
<ul>
<li>Take a leading role in climate action by identifying areas to improve your sustainability practices.</li>
<li>Support Uganda’s journey toward a low-carbon economy and meet global climate targets.</li>
</ul>
</li>
<li>
<h6>Enhance Efficiency</h6>
<ul>
<li>Reduce energy consumption and operational costs by identifying inefficiencies.</li>
<li>Transition to cleaner, more efficient technologies.</li>
</ul>
</li>
<li>
<h6>Strengthen Your Reputation</h6>
<ul>
<li>Build trust with customers, partners, and stakeholders who value climate-conscious practices.</li>
<li>Showcase your commitment to sustainability through transparent reporting.</li>
</ul>
</li>
<li>
<h6>Access New Opportunities</h6>
<ul>
<li>Qualify for carbon credits and incentives by participating in climate mitigation programs.</li>
<li>Enter green markets and align with international sustainability standards.</li>
</ul>
</li>
<li>
<h6>Prepare for Regulatory Compliance</h6>
<ul>
<li>Stay ahead of evolving environmental regulations in Uganda and globally.</li>
<li>Avoid penalties while demonstrating your commitment to sustainable business practices.</li>
</ul>
</li>




</ul>






</div>
</div>
</div>
</div>
</landing-layout>
</template>
<script>
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';

export default {
components:{
BannerComponent,
LandingLayout,


    },

data(){return{
subtitle:'Understanding your carbon footprint is the first step toward effective climate action. At the Uganda Carbon Registry (UCR), we empower businesses, organizations, and individuals to assess, track, and reduce their greenhouse gas (GHG) emissions. By doing so, you contribute to a more sustainable future while unlocking tangible benefits for your operations and lifestyle.',



}}



}
</script>
<style scoped>
ul li{
margin-bottom:15px;
list-style:decimal;
}

ul li ul li{
list-style:disc;
}

</style>