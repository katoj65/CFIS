<template>
<landing-layout>
<banner-component/>

<div class="container-fluid feature py-5">
<div class="container">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<p>
    We’re excited to help you take the next step in financing your carbon reduction project! Our Carbon Credit Microfinance Loans are designed to empower individuals, businesses, and communities to implement sustainable projects that reduce carbon emissions while generating revenue through carbon credits.
</p>
</div>
</div>
</div>














<div class="container-fluid feature bg-light py-0">
<div class="container py-0">
<div class="row g-0 p-0">
<div class="col-md-6 bg-light d-flex align-items-center">
<div class="p-5">
<h6 class="section-title text-start text-uppercase mb-3 text-danger">Financing a Greener Future</h6>
<h3 class="mb-3"> Who Can Apply?</h3>

<ul>
<li>
<p>
Individuals looking to reduce their carbon footprint by adopting clean energy solutions (e.g., solar panels, biogas, or energy-efficient stoves).
</p>
</li>
<li>
<p>
Businesses(SMEs) interested in sustainable practices like renewable energy installations, waste management, or energy efficiency upgrades.
</p>
</li>

<li>
<p>
Community groups implementing large-scale carbon reduction projects such as reforestation, agroforestry, or community-based renewable energy systems.
</p>
</li>
</ul>







<h3 class="mb-3 mt-5"> Our  Carbon Smart Loans</h3>
<p>
 We provide the financial resources needed to implement projects that reduce carbon emissions and our loans features;
</p>
<ul>
<li>
<p>
Low interest rates. Affordable financing options to help you start or scale your carbon reduction projects.
</p>
</li>
<li>
<p>
Flexible repayment terms. We offer tailored repayment plans to suit your project's cash flow and revenue from carbon credits.
</p>
</li>
<li>
<p>
Carbon credit generation. Your project’s emission reductions can generate carbon credits, providing a source of income to repay your loan and invest further in sustainability.
</p>
</li>
</ul>





</div>
</div>








<div class="col-md-6 bg-dark">
<div class="p-5">
<!-- <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6> -->


<h3 class="text-white mb-4">Why Choose Us for Your Carbon Credit Microfinance Loan?</h3>
<ul>
<li>
<p class="text-white">
    Access to global carbon markets. We help you turn your project’s emission reductions into carbon credits that can be sold on voluntary and compliance markets.
</p>
</li>

<li>
<p class="text-white">
Expert Support. From project planning to carbon credit certification, we offer technical guidance every step of the way.
</p>
</li>

<li>
<p class="text-white">
Tailored financing: Our loan options are designed to meet your specific needs, whether you’re a small business or a community-based project.
</p>
</li>

</ul>






<div class="bg-secondary py-5 px-4 px-sm-5 mt-5 rounded">
    <form class="py-2">
        <h3 class="text-white mb-4 text-uppercase">Get Started Today
        </h3>
       <p class="text-white" style=""> Ready to make a difference with your sustainability project? Apply for a loan and join the growing movement of Ugandans taking action against climate change while improving their livelihoods. </p>
    <div class="pt-3">
    <button class="btn btn-warning btn-block border-0 py-3" type="submit">Apply Now!</button>
    </div>
    </form>
</div>


</div>
</div>
</div>
</div>
</div>




















</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
import SubtitleComponent from '../components/SubtitleComponent.vue';
export default {
components:{
LandingLayout,
BannerComponent,
SubtitleComponent,

},

data(){return{
list:[
{title:'How much can I borrow?', content:'Loan amounts are flexible and depend on the size and scope of your project. We offer customized loans to fit different project needs.'},

{title:'What are the repayment terms?', content:'Repayment schedules are designed to align with the success of your project and the revenue generated from the sale of carbon credits.'},

{title:'Is there a timeline for project completion?', content:'Each project has its own timeline based on its scale and complexity. Our team will work with you to establish realistic goals and milestones for implementation.'},

{title:'How do carbon credits work?', content:'Carbon credits are earned when your project successfully reduces or captures greenhouse gas emissions. These credits are verified and sold on international carbon markets, providing additional income for your efforts.'}




],







}}





}
</script>
<style scoped>
ul li{
margin-bottom: 10px;
list-style:decimal;
}

ol li{
margin-bottom: 10px;
padding:10px;
border-radius: 5px;

}


</style>
