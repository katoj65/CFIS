<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<section class="py-4 mb-5">
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div>
<h5>
What is a Carbon Footprint?
</h5>
<p>
A carbon footprint is the total amount of GHG emissions caused directly and indirectly by activities or consumption patterns, typically measured in tons of CO₂ equivalent (CO₂e).<br/> For countries like Uganda, carbon footprints are analyzed at the national, organizational, and individual levels to understand the impact of energy use, agriculture, transportation, and industrial activities on the environment.
</p>
</div>
<div class="mt-4">
<h5>The Importance of Measuring Carbon Footprint in Uganda</h5>
<p>
Measuring carbon footprints allows Uganda to track its emissions, assess reduction potential, and strategically work towards its Nationally Determined Contributions (NDCs) under the Paris Agreement.
</p>
<p>
    By quantifying emissions, Uganda can achieve the following:
</p>
<ol>
<li>
<p> Identify key sources of emissions and prioritize reduction efforts.</p>
</li>
<li>
<p> Encourage sustainable practices across industries.</p>
</li>
<li>
<p> Engage businesses, organisations, and communities in measurable climate action.</p>
</li>
</ol>
</div>

<div class="mt-4">
<h5>
Key Sources of Carbon Emissions in Uganda
</h5>
<p>
<span class="bold text-dark">Agriculture.</span> Representing the largest share of Uganda’s emissions, agriculture is essential to the economy but heavily reliant on practices that emit methane and nitrous oxide. Livestock farming, deforestation, and crop production contribute significantly to Uganda’s GHG emissions.
</p>

<p>
<span class="bold text-dark">Energy.</span> Energy consumption for electricity and fuel is growing. While Uganda benefits from hydropower, fossil fuels still play a critical role, especially in transportation and rural areas, increasing the nation’s carbon footprint.
</p>

<p>
<span class="bold text-dark">Forestry and Land Use.</span> Deforestation for agriculture, charcoal production, and fuelwood use contributes to a high level of CO₂ emissions. Forest cover loss not only releases stored carbon but also reduces Uganda’s natural carbon sink capacity.
</p>

<p>
<span class="bold text-dark">Waste Management.</span> Inadequate waste disposal methods, including burning and poorly managed landfills, produce methane and CO₂ emissions. Urban areas with growing populations are increasingly contributing to waste-based emissions.
</p>

<p>
<span class="bold text-dark">Industrial Processes.</span> Although smaller in scale, Uganda’s industrial activities, such as manufacturing and construction, are gradually adding to the national carbon footprint, particularly as the economy develops.
</p>
</div>


<div class="mt-4">
<h5>The Impacts of Carbon Footprint on Uganda's Climate</h5>
<p>
Uganda’s carbon emissions are relatively low compared to industrialized countries; however, the country faces severe impacts of climate change. Temperature increases, erratic rainfall, and extreme weather events have disrupted agriculture, affecting food security and livelihoods.
<br/> Reducing Uganda’s carbon footprint is essential not only for the global fight against climate change but also for local resilience against its adverse effects.
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
export default {
    components:{
LandingLayout,
BannerComponent,

    },
    data(){return{
subtitle:'Uganda Carbon Registry is committed to providing the tools, resources, and insights needed to measure, reduce, and offset greenhouse gas emissions across sectors. A thorough understanding of Uganda’s carbon footprint reveals opportunities and challenges in reducing emissions while supporting growth and prosperity.',




    }}
}
</script>
<style scoped>
ol li{
list-style: lower-roman;
}
</style>