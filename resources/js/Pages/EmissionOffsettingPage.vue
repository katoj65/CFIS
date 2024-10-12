<template>
<landing-layout>
<banner-component/>

<div class="container-fluid feature bg-white py-0">
<div class="container py-5">
<div class="text-center mx-auto wow fadeInUp" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

<h4 class="mb-3 text-danger">Your path to carbon neutrality</h4>

<p class="mb-0 text-left">
Uganda is a country rich in natural resources, biodiversity, and cultural heritage, but it faces significant challenges due to climate change. Offsetting your emissions by investing in carbon reduction projects in Uganda not only contributes to global climate goals but also creates lasting benefits for local communities, ecosystems, and sustainable development.
</p>
<p class="mb-0 text-left">
Offsetting allows you to compensate for the emissions you cannot reduce directly by supporting projects that remove or reduce greenhouse gases from the atmosphere.
</p>
</div>
</div>
</div>





<section id="more-features" class="more-features section py-0 bg-light">

        <div class="container">

          <div class="row justify-content-around gy-4">

            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1 aos-init aos-animate h-100 p-5">
              <h4>What is emission offsetting?</h4>
              <p class="mt-3">
                Emission offsetting involves compensating for your carbon dioxide (CO2) emissions by investing in verified projects that reduce, capture, or prevent greenhouse gases. These projects could involve reforestation and afforestation, renewable energy, energy efficiency and methane reduction among others.
              </p>


              <div>



                <h4 class="mt-3">Why offset your emissions?</h4>
                <div>

                <ol class="mt-2 mb-5">
                <li>
                <p>
                To achieve carbon neutrality. Balance out your emissions by investing in projects that remove or reduce an equivalent amount of CO2, allowing you to achieve net-zero emissions.
                </p>
                </li>
                <li>
                <p>
                To support global climate goals. Your investment in emission reduction projects contributes to global efforts to limit temperature rise and combat climate change.
                </p>
                </li>
                <li>
                <p>
                Enhance corporate sustainability. For businesses, offsetting emissions can help meet environmental targets, demonstrate corporate responsibility, and improve your brand's reputation.
                </p>
                </li>
                <li>
                <p>
                Protect biodiversity and communities. Many offset projects, particularly in developing countries like Uganda, provide additional benefits such as preserving biodiversity, creating jobs, and improving community health.
                </p>
                </li>


                </ol>
                </div>


</div>
<div>
</div>
</div>


<div class="col-lg-5 d-flex flex-column justify-content-center order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
<div class="bg-dark p-5" style="margin-bottom:-1px;z-index:1;">
<h4 class="text-white">How Emission Offsetting Works</h4>
<p class="mt-4 text-white">
    The process of offsetting your emissions is simple and transparent.
</p>
<div class="project">

<ol class="mt-2 text-white" >
<li>
<p>
    Calculate your carbon footprint.
</p>
</li>
<li>
<p>
    Choose a verified carbon offset project.
</p>
</li>
<li>
<p>
    Purchase carbon credits.
</p>
</li>
<li>
<p>
    Receive your carbon offset certificate.
</p>
</li>

<li>
<p>
Track the impact of your offset.
</p>
</li>

<li>
<p>
Monitor and report your emissions.
</p>
</li>

<li>
<p>
Support a carbon reduction or carbon removal project.
</p>
</li>

</ol>
</div>



</div>
</div>
</div>
</div>
</section>









<section class="bg-dark">
    <div class="container-fluid bg-dark my-0">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7 py-5 py-lg-0 pr-5">
        <!-- <h6 class="text-primary text-uppercase font-weight-bold text-danger">Offset Your Carbon Footprint</h6> -->
        <h4 class="mb-4 text-white">The benefits of offsetting your emissions</h4>
        <p class="mb-2 text-white">

            By offsetting your emissions, you are making a real impact on the fight against climate change. The benefits include climate action, sustainability, local development and positive branding.

        </p>
        <p class="mb-2 text-white">
            Offsetting your emissions in Uganda is more than just a personal or corporate responsibility it's an investment in a sustainable, equitable future. By supporting Ugandan carbon projects, you can make a real impact on the environment, biodiversity, and the well-being of communities.
        </p>





        </div>
        <div class="col-lg-5">
        <div class="bg-dark py-5 px-4 px-sm-5">
        <form class="py-5">
            <h4 class="text-white mb-4">Start offsetting your emissions today!</h4>
           <p class="text-white" style=""> Join the global movement to reduce emissions and create a sustainable future. Whether you are an individual looking to offset your travel emissions or a company striving for carbon neutrality, our platform offers the tools you need to make a difference. </p>
        <div class="pt-3">
        <button class="btn btn-success btn-block border-0 py-3" type="submit">Contact Us</button>
        </div>
        </form>
        </div>
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






}}
}
</script>
<style scoped>
ol li{
margin-bottom:5px;
padding:5px;
list-style:disc;
}

.project ol li p{
color:white;
}
</style>