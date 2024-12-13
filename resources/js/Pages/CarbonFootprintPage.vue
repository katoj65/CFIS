<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<section class="py-4 mb-5">
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div>
<h5>
Comprehensive Carbon Tracking
</h5>
<p>
Managing your carbon footprint starts with understanding it. The Uganda Carbon Registry provides:
</p>
<ol>
<li class="text-muted">
GHG Inventory Tools: Easy-to-use calculators to measure emissions from your activities, operations, or projects.
</li>
<li class="text-muted">
Detailed Reporting: Comprehensive reports that break down your emissions, enabling better decision-making.
</li>
<li class="text-muted">
Baseline Assessments: Establish a clear starting point for your sustainability journey.
</li>
</ol>




</div>
<div class="mt-4">
<h5>Actionable Insights for Reduction</h5>
<p>
Our platform goes beyond tracking, it empowers you to act. We offer:
</p>
<ol>
<li class="text-muted">
Tailored recommendations to lower your carbon footprint based on your unique emissions profile.
</li>
<li class="text-muted">
Educational resources. Workshops, guides, and webinars to help you understand and implement sustainable practices.
</li>
<li class="text-muted">
Sector-specific solutions including customized support for industries such as agriculture, energy, transportation, and manufacturing.
</li>
</ol>
</div>




<div class="mt-4">
<h5>
Verified Carbon Offsets
</h5>
<p>
For emissions that cannot be eliminated, the Uganda Carbon Registry enables you to offset them through high-quality, verified projects, including nature based projects and community based initiatives.
</p>
</div>






<div class="mt-4">
<h5>
Compliance and Reporting
</h5>
<p>
Navigating Uganda’s regulatory landscape can be complex. UCR simplifies compliance by:
</p>
<ol>
<li class="text-muted">
    Ensuring your activities align with national and international climate policies.
</li>
<li class="text-muted">
    Facilitating the issuance, tracking, and trading of carbon credits to meet mandatory and voluntary requirements.
</li>
<li class="text-muted">
    Providing third-party verification to validate your sustainability claims.
</li>
</ol>
</div>


<div class="mt-4">
<h5>
Why Choose UCR?
</h5>
<p>
The Uganda Carbon Registry is more than a platform,it is a movement toward a greener, more resilient future. By working with us, you benefit from:
</p>
<ol>
<li class="text-muted">
Local expertise and solutions tailored to Uganda’s unique environmental and economic challenges.
</li>
<li class="text-muted">
Cutting-edge tools for efficient carbon management.
</li>
<li class="text-muted">
Partnerships with national and international stakeholders to amplify your impact.
</li>
</ol>

</div>



<div class="mt-4">
    <h5>
        Join the Movement
    </h5>
    <p>
    Let’s build a sustainable future together. Contact the Uganda Carbon Registry today to start managing your carbon footprint and contributing to Uganda’s climate goals.
    </p>
</div>












</div>

</div>
</div>
</section>
</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import LinkPointerComponent from '../components/LinkPointerComponent.vue';
export default {
components:{
LandingLayout,
BannerComponent,
LinkPointerComponent,

    },
    data(){return{
subtitle:'The Uganda Carbon Registry (UCR) is your partner in managing carbon footprints effectively and sustainably. UCR provides tools and resources to help individuals, businesses, and organisations track, reduce, and offset greenhouse gas (GHG) emissions.',




    }}
}
</script>
<style scoped>
ol li{
list-style: lower-roman;
margin-bottom:10px;
}
</style>