<template>
<landing-layout>
<banner-component/>


<div class="container-fluid feature py-0">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<p class="mb-0 text-left">
    The carbon market is transforming the way businesses, organisations, and governments tackle climate change. By participating in the carbon market, you not only contribute to global emissions reduction but also unlock new revenue streams, strengthen your sustainability efforts, and enhance your brand reputation.
</p>


</div>
</div>
</div>

















<section>
<div class="container-fluid feature py-3">
<div class="container py-0">
<div class="row g-0 p-0">




<div class="col-md-6 bg-light">
<div class="p-5">
<h4 class="mb-4">What are carbon credits?</h4>
<p class="mb-4">
Carbon credits, or carbon offsets, refer to carbon emissions reductions or removals, measured in tonnes of carbon dioxide equivalent (tCO2e). Carbon credits can be generated through projects which take in carbon from the atmosphere (e.g. reforestation), or reduce the amount of carbon released into the atmosphere (e.g. renewable energy projects).
</p>

<h4 class="mt-4">Benefits of Carbon Trading?</h4>
<ul>
<li>
<p>
Carbon markets help to channel financial resources to support emissions reduction or removal activities globally, which would otherwise not be implemented due to factors such as insufficient policy and economic incentives.
</p>
</li>
<li>
<p>
This accelerates climate action and advances global climate ambition, by unlocking cost-effective mitgation activities to realise the Paris Agreement goal.
</p>
</li>

<li>
<p>
Carbon credits also provides various co-benefits to local communities where the projects are hosted, such as sustainable development through the creation of green jobs, sustainable energy, environmental and biodiversity protection, and climate adaptation and resilience.
</p>
</li>


</ul>


<h4 class="mt-4">How Carbon Markets support Climate Action</h4>
<p class="mb-4">
Article 6 of the Paris Agreement sets out the framework for countries to voluntarily cooperate to achieve their climate targets, or Nationally Determined Contributions (NDCs).
</p>


<p>
Under Article 6, countries can trade Internationally Transferred Mitigation Outcomes (ITMOs) voluntarily to jointly achieve their NDCs. These ITMOs have the potential to help host countries go above and beyond their unconditional Nationally Determined Contributions (NDCs), or climate commitments that the host countries intend to achieve without external support. ITMOs could come in the form of carbon credits with corresponding adjustments. Corresponding adjustments is a mechanism to ensure no double counting of emissions reductions and removals by countries.
</p>






</div>
</div>


<div class="col-md-6 bg-dark d-flex align-items-center">
<div class="p-5 h-100">

<h2 class="text-white mb-4 title-border-left pl-2">Drive Sustainability and Profitability</h2>
<p class=" mb-4 text-white">In today’s world, sustainability is not just an ethical imperative. It's also a pathway to long-term profitability. </p>


<h4 class="text-white">
How to Participate
</h4>
<p class="mb-4 text-white">
Participating in the carbon market can open doors to new revenue streams, help reduce greenhouse gas (GHG) emissions, and contribute to global climate goals. Here’s a step-by-step guide to help individuals, organisations, and businesses participate in the carbon market:
</p>
<ul>
<li>
<p class="text-white">
Identify whether your organisation is participating due to regulatory requirements (compliance) or to voluntarily reduce emissions.
</p>
</li>
<li>
<p class="text-white">
Create a carbon project that reduces or removes emissions or investing in an existing project.
</p>
</li>
<li>
<p class="text-white">
Register your project with the Uganda Carbon Registry.
</p>
</li>
<li>
<p class="text-white">
Monitor and report project performance.
</p>
</li>
<li>
<p class="text-white">
Issue and sell carbon credits using our platform.
</p>
</li>

<li>
<p class="text-white">
Continueous engagements with our carbon footprint management platform.
</p>
</li>
<li>
<p class="text-white">
Ensure that your participation in the carbon market complies with local, national, and international regulations
</p>
</li>
<li>
<p class="text-white">
Reinvest and scale your efforts.
</p>
</li>
<li>
<p class="text-white">
Share your participation and achievements with stakeholders.
</p>
</li>
</ul>




<div class="mt-4 bg-secondary p-5 border-radius">
<h4 class="text-white">
Get Started Today!
</h4>
<p class="text-white">For guidance on how to develop a project or join the carbon market, reach out to the us.
Together, we can drive meaningful change toward a low-carbon, sustainable future.
</p>
<contact-component>
<template #button>
    <Inertia-link :href="route('carbon.offset-emissions')" class="p-2 btn btn-danger btn-block">Offset Your Emissions</Inertia-link>
</template>
</contact-component>
</div>





</div>
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
import ContactComponent from '../components/ContactComponent.vue';
export default {
components:{
BannerComponent,
LandingLayout,
ContactComponent

    }
}
</script>
<style scoped>
ul li{
margin-bottom:15px;
list-style:upper-roman;
}

</style>