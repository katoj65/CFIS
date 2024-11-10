<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<secion class="mb-5">
<div class="container py-4">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div>
<h5>
Source of Emission in Uganda
</h5>
<ol>
<li class="text-muted">
   The agriculture sector is a leading contributor, with emissions from livestock, rice cultivation, and land-use change.
</li>

<li class="text-muted">
Energy. As Uganda’s population and economy grow, energy demand increases. Biomass and fossil fuel use for cooking, transportation, and industry contribute to CO₂ emissions.
</li>
<li class="text-muted">
    Solid waste and wastewater contribute methane emissions, especially in urban areas where waste management infrastructure is limited.
</li>

<li class="text-muted">
    Deforestation and land use. Forests are critical carbon sinks, but deforestation and land-use changes continue to release carbon into the atmosphere, impacting biodiversity and climate resilience.
</li>

</ol>
</div>



<div class="py-3">
<h5>
Climate-driven Costs to the Economy
</h5>
<ol>
<li class="text-muted">
<strong>Annual Greenhouse Gas Emissions:</strong> Approximately 43 million metric tons of CO₂ equivalent.
</li>
<li class="text-muted">
Uganda is ranked 147 among the most vulnerable nations.
</li>
<li class="text-muted">
<strong>Climate driven-cost:</strong> $5.9 billion (Shs: 21.5 trillion).
</li>
<li class="text-muted">
<strong>Ammual GDP loss:</strong> 2% - 6% (approximay $3 billion - $8 billions ) by 2030.
</li>
<li class="text-muted">
Food security risks.
</li>
<li class="text-muted">
Public health related risks including increased waterborne diseases due to extreme rainfall and flooding
</li>
<li class="text-muted">
Damage to Infrastructure due to flooding and landslides from extreme rainfall events damage roads, bridges, and buildings, increasing repair and maintenance costs.
</li>
<li class="text-muted">
Increased water stress and damage to energy sources such as Hyropower dams increasing the demand for irrigation, drinking water, and industrial use increases and electricity generation.
</li>
</ol>

</div>
<div>
<h5>
Uganda's Climate Action Goals
</h5>
<p>
Uganda is dedicated to lowering its carbon emissions in line with the United Nations Framework Convention on Climate Change (UNFCCC) and the Paris Agreement. <br/>
Through its Nationally Determined Contribution (NDC), Uganda aims to reduce its emissions by 22% by 2030, enhancing renewable energy, sustainable agriculture, and forestry management.
</p>
</div>

<div class="py-4">
<h5>
The Role of the Uganda Carbon Registry
</h5>
<p>
UCR empowers individuals, businesses, and organisations to take action on climate change. By tracking and validating carbon offset projects, the registry offers a transparent platform for impactful emission reduction projects that benefit both the environment and local communities. <br/>
The registry offers comprehensive tools and services for emissions tracking, project verification, climate education, and carbon credit transactions and financing, empowering individuals, businesses, and communities to take transparent, measurable climate action and drive sustainable development in Uganda.

</p>
</div>

<div>
<h5>

</h5>
<p>

</p>

</div>










</div>
</div>
</div>
</secion>
</landing-layout>
</template>
<script>
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';
export default {
components:{
BannerComponent,
LandingLayout

    },

props:{
title:{},
},

data(){return{
subtitle:'Uganda, like many developing nations, faces the dual challenge of advancing economic growth while preserving its natural environment. Rapid urbanisation, energy demands, and agricultural expansion contribute to greenhouse gas emissions, which impact air quality, health, and the climate.',




}}


}
</script>
<style scoped>
ol li{
list-style-type: lower-roman;
margin-bottom:10px;
}
</style>