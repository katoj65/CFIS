<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<div class="container mt-4 mb-5 pb-5">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">


<div>
<h5>
Ensuring Compliance in Carbon Mitigation
</h5>
<ol>
<li class="text-muted">
UCR acts as a repository for carbon offset projects, ensuring accurate and accessible emissions data for all stakeholders.
</li>

<li class="text-muted">
Providing templates and guidelines for consistent monitoring and reporting, aligned with international standards such as the Paris Agreement and UNFCCC requirements.
</li>
<li class="text-muted">
Facilitating collaboration with independent third-party verifiers to certify emission reductions, ensuring credibility and compliance.
</li>

<li class="text-muted">
Supporting Uganda's commitments under its Nationally Determined Contributions (NDCs) by tracking sectoral emissions reductions and facilitating reporting to the UNFCCC.
</li>
<li class="text-muted">
Assists businesses and organisations in meeting local carbon reduction requirements, avoiding penalties, and maintaining operational legitimacy.
</li>

<li class="text-muted">
Ensuring transparency and building trust among project developers, buyers, and regulators.
</li>

<li class="text-muted">
Providing real-time updates on registered projects, carbon credits issued, and retirement of credits to avoid double-counting.
</li>

</ol>
</div>



<div class="mt-3">
<h5>
Facilitating Climate Financing
</h5>
<ol>
<li class="text-muted">
UCR serves as a marketplace where businesses, individuals, and organisations can purchase verified carbon credits to offset their emissions.
</li>
<li class="text-muted">
Rewarding projects such as reforestation, renewable energy, and sustainable agriculture with carbon credits, creating an income stream for developers.
</li>
<li class="text-muted">
Encouraging competitive pricing for carbon credits, attracting local and international buyers and enhancing financial flows into Uganda’s carbon projects.
</li>
<li class="text-muted">
Linking high-impact projects with potential investors or climate funds, ensuring financial support for initiatives aligned with Uganda’s climate goals.
</li>

<li class="text-muted">
Attracting global investiments.
</li>
<li class="text-muted">
Offering a framework to channel climate finance into grassroots projects through partnerships with local financial institutions.
</li>
<li class="text-muted">
Providing training and resources for project developers to meet registration requirements and access funding opportunities.
</li>
</ol>
</div>



<div class="mt-3">
<h5>Building Stakeholder Capacity</h5>
<ol>
<li class="text-muted">Facilitating technical guidance by publishing resources and conducting workshops on best practices for project design, emissions quantification, and compliance with UCR and international standards. </li>
<li class="text-muted">
Engaging with government agencies, NGOs, and private sector players to harmonize efforts, ensuring comprehensive climate action across all sectors.
</li>
<li class="text-muted">
Offering tools such as emissions calculators and project dashboards for stakeholders to track and optimize their performance.
</li>
</ol>
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
subtitle:" UCR plays a pivotal role in facilitating compliance in carbon mitigation and climate financing by serving as a transparent, efficient, and accessible platform for stakeholders in Uganda's carbon market."


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
margin-bottom: 10px;
list-style:lower-roman;
}
h1,h2,h3,h5,h5,h6{
letter-spacing: 0.3px;
}

</style>