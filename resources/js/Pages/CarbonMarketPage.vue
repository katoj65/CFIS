<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<div class="container py-4">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<h5>Supporting Local Carbon Market</h5>
<p>
UCR empowers Ugandan communities and organisations to actively participate in carbon markets by:
</p>

<ul>
<li>
Project Registration and Certification: Supporting local project developers in renewable energy, reforestation, and sustainable agriculture to register their initiatives and generate verified carbon credits.
</li>
<li>
Capacity Building: Offering training and technical assistance to local stakeholders, enabling them to meet international standards for carbon credit generation.
</li>
<li>
Economic Benefits: Providing a pathway for communities to monetise sustainable practices, fostering economic growth while contributing to climate goals.
</li>
</ul>

<h5>Integrating Regional Carbon Markets</h5>
<ul>
<li>Facilitating cross-border trading of carbon credits, creating a unified market for buyers and sellers within the region.</li>
<li>Aligning carbon credit methodologies with regional frameworks to ensure consistency and compatibility across East African nations.</li>
<li>Promoting partnerships and knowledge exchange to scale successful climate mitigation strategies across borders.</li>
</ul>


<h5>Bridging International Carbon Markets</h5>
<ul>
<li>Partnering with international standards such as Gold Standard and Verra to ensure the quality and reliability of carbon credits.</li>
<li>Providing a secure and transparent platform for tracking the issuance, trading, and retirement of carbon credits.</li>
<li>Linking local projects with international corporations and institutions seeking high-quality offsets to meet their sustainability commitments.</li>
</ul>

<h5>
Why UCR Matters in Carbon Markets
</h5>
<ul>
<li>
UCR leverages advanced technologies to ensure every transaction is secure, traceable, and trustworthy.
</li>
<li>
The platform prioritises inclusivity, empowering small-scale projects and marginalised communities to participate in carbon markets.
</li>
<li>
UCR Supports local and regional projects, UCR drives long term environmental and socio-economic benefits.
</li>
<li>
UCR’s framework is designed to grow with market demands, ensuring relevance and effectiveness in a dynamic carbon economy.
</li>
</ul>








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
subtitle:'As Uganda’s first locally developed carbon registry, UCR is uniquely positioned to bridge the gap between global carbon markets and local climate action initiatives.',



}}



}
</script>
<style scoped>
ul li{
margin-bottom:15px;
list-style:upper-roman;
}

</style>