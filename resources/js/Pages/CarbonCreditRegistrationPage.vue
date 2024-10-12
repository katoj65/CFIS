<template>
<landing-layout>
<banner-component/>





<div class="container-fluid feature py-0">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <!-- <h5 class="text-danger mb-3">Empowering sustainability through data</h5> -->
<p class="mb-0 text-left">
   We provide a streamlined process for registering carbon credits generated from projects that reduce greenhouse gas (GHG) emissions. Whether you're running a reforestation project, installing renewable energy infrastructure, or improving energy efficiency, registering your carbon credits ensures that your emissions reductions are verified and can be traded or sold on carbon markets.
</p>

</div>
</div>
</div>



<div class="container-fluid feature bg-white py-0">
<div class="container py-3">
<div class="row g-0 p-0">
<div class="col-md-6 col-12 bg-light d-flex align-items-center">
<div class="p-5">


<h4 class=" mb-4">What is Carbon Credit Registration?</h4>

<p class="mb-0">
Carbon credit registration involves documenting and verifying the carbon emission reductions from eligible projects. Once registered, these credits can be issued, sold, or traded to organisations and individuals looking to offset their carbon footprint. Each carbon credit represents the reduction or removal of one metric ton of CO2 or its equivalent in other GHGs.
</p>



<h4 class="mb-3 mt-4">
Why Register Your Carbon Credits?
</h4>
<ol>
<li>
<p>
Verification and credibility. Registered credits are verified according to global standards, ensuring they are credible and tradable in carbon markets.
</p>
</li>
<li>
<p>
Access to carbon markets. Registration allows you to sell or trade your carbon credits on both local and international markets.
</p>
</li>
<li>
<p>
Revenue generation. Projects that generate carbon credits can earn additional income by selling credits to organizations looking to offset their emissions.
</p>
</li>
<li>
<p>
Support for sustainability. Registering carbon credits showcases your commitment to reducing emissions and contributing to Uganda’s sustainable development.
</p>
</li>
<li>
<p>
Increased project visibility. Registered projects are listed in the Uganda Carbon Registry, providing visibility to potential buyers and investors.
</p>
</li>
</ol>


<h4 class="mb-0 mt-5">Some of the Eligible Projects </h4>
<p class="mt-3 mb-5">
The following types of projects are typically eligible for carbon credit registration, though the specific eligibility criteria will depend on the project’s adherence to recognized methodologies: Reforestation and afforestation, renewable energy, energy efficiency, sustainable agriculture, waste management and methane capture and clean water projects among others.
</p>



<h4 class="mb-0 mt-5">Why Choose Us for Registration? </h4>



<ol class="mt-3">
<li>
<p>
Local expertise. Our deep understanding of Uganda’s environmental, regulatory, and economic landscape ensures that your project receives relevant and effective support.
</p>
</li>
<li>
<p>
Global standards. We adhere to internationally recognized methodologies and verification processes, ensuring your credits are credible and can be traded on global markets.
</p>
</li>
<li>
<p>
Sustainability focus. By registering with us, you are contributing to Uganda’s national climate goals and helping the country transition to a low-carbon economy.
</p>
</li>
<li>
<p>
Transparent process. We ensure full transparency in the registration process, from initial documentation to credit issuance, giving you peace of mind that your project is properly verified.
</p>
</li>
</ol>











</div>
</div>













<div class="col-md-6 col-12 bg-dark">
<div class="p-5">
<div class=" p-4">

<h1 class="mb-0 text-white text-uppercase pl-2" style="border-left:solid 5px white;">Turn Emissions into Solutions</h1>
<div class="mt-3 text-white">
<p class="text-white mb-0">
    By turning emissions into solutions, Uganda is not only contributing to global climate action but also ensuring a resilient and prosperous future for its people.
</p>

</div>




</div>




                    <div class="counter-item  rounded p-4">
                    <h4 class="mb-0 text-white">  The Economic Value of Carbon Credits in Uganda</h4>
                    <div class="mt-3 text-white">
                    <p class="text-white">
                        For Uganda, the potential economic value of carbon credits is immense. With a wealth of natural resources and vast potential for renewable energy, Uganda is well-positioned to capitalize on carbon markets. Projects that reduce emissions such as afforestation, energy-efficient technologies, and sustainable land use can earn carbon credits that are traded for revenue. This financial incentive makes it easier for businesses and communities to adopt sustainable practices, accelerating the country’s transition to a low-carbon economy.
                    </p>
                    <p class="text-white">
                        Moreover, by exporting carbon credits, Uganda can generate foreign exchange revenue, further boosting economic growth. This revenue can be reinvested in critical areas such as healthcare, education, infrastructure, and poverty reduction—helping to drive a more inclusive and sustainable development agenda.
                    </p>
                    </div>

                    </div>




<div class="counter-item  rounded p-4">
<h4 class="mb-0 text-white">Climate Impact and Global Responsibility</h4>
<div class="mt-3">
<p class="text-white">
Carbon credits represent more than just economic opportunity; they are also a vital tool in the fight against global climate change. Uganda’s participation in carbon markets helps reduce global GHG emissions and contribute to the collective effort to meet climate goals under the Paris Agreement.
</p>
<p class="text-white">
By registering carbon credit projects with the Uganda Carbon Registry, businesses and communities can contribute to both local and global climate resilience. These efforts support Uganda’s commitment to reducing emissions while ensuring that the country remains competitive in an increasingly climate-conscious global market.
</p>




<div class="bg-secondary pl-5 pr-5 py-4 mt-5">
<h3 class="text-white mb-3">Turning Carbon Into Value</h3>
<p class="text-white mb-4">
    The Uganda Carbon Registry is at the forefront of a transformative movement, where carbon emissions are no longer just a problem to solve, but an opportunity to seize. By supporting carbon credit projects, the registry helps unlock financial benefits while fostering environmental sustainability.
</p>
<p>
<Inertia-link :href="route('login')" class="btn btn-danger btn-lg border-0">Join Now</Inertia-link>
</p>
</div>



</div>
</div>




                </div>
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
list-style-type:circle;
margin-bottom: 10px;
}
h1,h2,h3,h4,h5,h6{
letter-spacing: 0.3px;
}

</style>