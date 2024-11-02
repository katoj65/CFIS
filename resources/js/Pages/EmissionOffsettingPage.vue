<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>


<section class="py-4">
<div class="container">
<div class="row">
<div class="col-8 offset-lg-2">

<div class="mb-4">
<h5>
Why Invest in Uganda’s Certified Carbon Offset Projects?
</h5>
<ol class="mt-4">
<li class="text-muted">
    Each project undergoes stringent verification to guarantee credible and measurable reductions in greenhouse gases.
</li>
<li class="text-muted">
    Our offset projects prioritize community benefits, creating local jobs, enhancing infrastructure, and supporting sustainable livelihoods.
</li>
<li class="text-muted">
    Uganda’s natural beauty is one of its greatest assets. Our projects help protect forests, wetlands, and other critical ecosystems that are essential for maintaining biodiversity and combating climate change.
</li>

</ol>
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
export default {
components:{
LandingLayout,
BannerComponent,
},

data(){return{
subtitle:"We invite investors, organizations, and individuals to make a meaningful impact through our certified carbon offset projects. By investing in these projects, you are not only compensating for unavoidable emissions but also contributing to Uganda’s environmental and social well-being. ",





}}
}
</script>
<style scoped>
ol li{
list-style-type:lower-roman;
margin-bottom: 10px;
}

</style>