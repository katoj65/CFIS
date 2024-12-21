<template>
<landing-layout>
<banner-component :subtitle="subtitle" :title="title"/>
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div class="py-4">
<h5>Why Join UCR?</h5>
<ul>
<li>
Drive climate impact by contributing to reducing greenhouse gas emissions and advancing Uganda’s climate goals.
</li>
<li>
Be a sustainability leader by partnering with UCR to develop innovative carbon reduction projects and access international carbon markets.
</li>
<li>
Shape Uganda’s future by supporting transformative policies and initiatives that create a low-carbon, resilient economy.
</li>
<li>
Collaborate globally by engaging with national and international stakeholders working toward the same mission.
</li>
</ul>


<div class="py-3">
<h5>
How You Can Join
</h5>
<h6>
1. As an Individual
</h6>
<p>
Take action today to reduce your carbon footprint and advocate for climate solutions. Here’s how:
</p>
<ul>
<li>
Measure your carbon footprint.
</li>
<li>
Participate in UCR-hosted awareness campaigns and events.
</li>
<li>
Volunteer for local climate initiatives and projects.
</li>
<li>
Learn and educate others about carbon credits and sustainability.
</li>
</ul>
<h6>
2. As an Organisation or Business
</h6>
<ul>
<li>
Measure your carbon footprint.
</li>
<li>Register your carbon reduction projects with UCR for validation and certification.
</li>
<li>
Access Uganda’s carbon market to offset your emissions.
</li>
<li>
Collaborate with us to design impactful community programs.
</li>
</ul>

<h6>3. As a Partner</h6>
<p>Collaborate with UCR to amplify climate action:</p>
<ul>
<li>
Measure your carbon footprint.
</li>
<li>
Provide technical expertise, funding, or resources to support our initiatives
</li>
<li>
Partner with us to advocate for climate policies and build capacity.
</li>
<li>
Join our network of international climate stakeholders.
</li>
</ul>

<h5>Membership Benefits</h5>
<ul>
<li>
Verified Recognition: Get your projects registered, validated, and recognised globally.
</li>
<li>
Resource Access: Leverage tools, data, and resources to advance your sustainability goals.
</li>
<li>
Capacity Building: Gain access to workshops, training, and expert guidance.
</li>
<li>
Networking Opportunities: Connect with like-minded individuals and organisations in the climate space.
</li>
</ul>
<h5>Get Started Today!</h5>
<p>
Joining the Uganda Carbon Registry is easy. Fill out our membership form on our website or contact us directly to learn more about how you can contribute to Uganda’s climate solutions.
</p>
<!-- <Inertia-link :href="route('membershipForm')" class="text-danger">Membership Form</Inertia-link> -->
<contact-details/>
</div>



</div>
</div>
</div>
</div>
</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import ContactDetails from '../components/ContactDetails.vue';
export default {
components:{
LandingLayout,
BannerComponent,
ContactDetails
},
props:{
title:{},
response:[],
},
data(){return{
subtitle:'At UCR, we are committed to empowering individuals, organisations, and communities to take meaningful action against climate change. Join us in building a sustainable future for Uganda and the planet by participating in our initiatives, collaborating on projects, or contributing your expertise.',



}}

}
</script>
<style scoped>
ul li{
list-style: lower-roman;
}
</style>