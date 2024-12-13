<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<div class="container mt-4 mb-5 pb-5">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">


<div>
<h5>
Data-Driven Decision Making
</h5>

<ol>
<li class="text-muted">
Real-Time emissions data. By tracking greenhouse gas emissions at the project, organisational, and national levels, the registry provides a clear picture of Uganda’s carbon footprint.
</li>
<li class="text-muted">
  Baseline and benchmarking tools. Policymakers can use the registry’s datasets to establish realistic baselines and benchmarks for emissions reductions.
</li>
<li class="text-muted">
  Performance monitoring. The registry’s transparent framework enables continuous monitoring of policy outcomes, ensuring accountability and timely adjustments.
</li>
</ol>
</div>




<div class="mt-3">
<h5>
  Supporting Compliance with International Commitments
</h5>
<p>
  Uganda is a signatory to the Paris Agreement, which obligates the country to meet specific climate targets.
</p>
<ol>
<li class="text-muted">
Facilitating nationally determined contributions (NDCs).
</li>
<li class="text-muted">
Encouraging international funding.
</li>
<li class="text-muted">
Aligning with global standards.
</li>
</ol>

</div>


<div class="mt-3">
<h5>
  Informing Legislative and Regulatory Reforms
</h5>
<ol>
<li class="text-muted">
The registry’s data can inform the design of carbon taxes or cap-and-trade systems tailored to Uganda’s context.
</li>
<li class="text-muted">
Policymakers can leverage registry data to develop targeted strategies for high-emitting sectors, such as energy, agriculture, and transportation.
</li>
<li class="text-muted">
The UCR highlights successful initiatives, guiding government incentives for scalable and impactful projects.
</li>
</ol>
</div>

<div class="mt-3">
<h5>
  Raising Public Awareness and Advocacy
</h5>

<ol>
<li class="text-muted">
Educational outreach. The registry’s reports and tools can be used to educate citizens about their role in reducing emissions.
</li>
<li class="text-muted">
Empowering communities. By highlighting local climate action success stories, the UCR inspires grassroots movements.
</li>
<li class="text-muted">
Strengthening advocacy efforts. Civil society organisations can use registry data to advocate for stronger climate policies.
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
subtitle:"A cornerstone of effective climate change policy is access to accurate and reliable data. UCR a unique opportunity to tackle climate change while advancing its sustainable development goals. "


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