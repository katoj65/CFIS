<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>

<section class="py-3 bg-light">
<div class="container pb-5">
<div class="row pb-5">
<div class="col-12 col-md-8 offset-lg-2">



<div class="py-2">
<h5 class="py-2">
The Most Affected Sectors
</h5>
<p>
The most impacted sectors include agriculture, water resources, energy, and tourism. With over 70% of Uganda’s population reliant on subsistence farming, erratic weather patterns prolonged droughts, floods, and rising temperatures have drastically reduced crop yields, impacting food security and income.
</p>
<p class="py-2">
The energy sector has faced reduced hydropower generation due to fluctuating water levels in rivers and lakes, while the tourism sector suffers from the loss of biodiversity and degraded ecosystems.
</p>
</div>





<div class="py-2">
<h5 class="py-2">
The Impact of Climate Change on Uganda’s Economy
</h5>
<p>
It is estimated that Uganda’s GDP suffers an annual loss of 2% to 4% due to climate-related damage, amounting to billions in monetary losses. The World Bank estimates that Uganda could lose up to US $5 billion annually by 2025 if no action is taken.<br/>
Beyond these losses, critical infrastructure such as roads, bridges, and hospitals are increasingly at risk, requiring more frequent repairs and diverting resources from other essential sectors.
</p>
</div>



<div class="py-2">
<h5 class="py-2">
The Impact on Biodiversity and Livelihood
</h5>
<p>
Biodiversity loss is another alarming consequence, threatening the ecosystems that support wildlife, tourism, and traditional livelihoods. As a result, Uganda faces revenue loss and low economic growth, compounded by rising unemployment and increased poverty in vulnerable communities. Livelihoods are directly impacted, with many people displaced due to floods, droughts, and soil degradation, causing a strain on rural populations who rely on natural resources.

</p>
</div>





<div class="py-2">
<h5 class="py-2">
Urgent Need for Action
</h5>
<p>
If current trends continue unchecked, Uganda could face catastrophic outcomes, including irreversible damage to ecosystems, an increase in climate-induced migration, and more severe economic consequences. Potential challenges include a lack of resources for adaptation, insufficient climate finance, and limited technical capacity to address the growing crisis.

</p>
</div>



<div class="py-2">
    <h5 class="py-2">
 Our Intervention
    </h5>
    <p>
To mitigate the impacts, Uganda must adopt climate-smart agriculture, expand its use of renewable energy, enforce policies that curb deforestation, and invest in resilient infrastructure. On the financial side, carbon markets and mechanisms like carbon pricing can provide incentives for emission reductions. The Uganda Carbon Registry can play a pivotal role by tracking emissions, providing access to carbon markets, and facilitating carbon financing through innovative models such as carbon microfinance.<br/>
Additionally, the Uganda Carbon Registry can also help with data collection and reporting, enabling more informed policy decisions and promoting sustainable investment. By integrating climate action across sectors, Uganda can protect its economy and secure a more resilient future. 

</p>
    </div>











</div>
</div>
</div>
</section>
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
//
data(){return{
subtitle:"The Ugandan economy is increasingly being impacted by climate change, which has far-reaching consequences for various sectors and the livelihoods of its people. The major causes of climate change in Uganda are carbon emissions, primarily from deforestation, agriculture, energy production, and transport. Uganda's carbon emissions result from activities such as burning fossil fuels, land-use change, and unsustainable agricultural practices. Each sector contributes to emissions, with agriculture accounting for about 25%, transport 12%, energy production 16%, and deforestation around 20%, making it a significant driver of Uganda's overall greenhouse gas emissions.",





}}
}
</script>