<template>
<landing-layout>
<banner-component/>
<section>
<div class="container-fluid py-5 bg-light">
<div class="container">
<div class="row">
<div class="row">
<div class="col-12 col-md-2"></div>
<div class="col-12 col-md-8">
<div>
<h5 class="text-danger mb-4 text-center">Measure your impact and take action</h5>
<p>The first step in reducing your carbon footprint is understanding how much carbon dioxide (CO2)
you’re responsible for emitting. Our Carbon Emission Calculator makes it easy to measure your personal,
household, or business emissions, allowing you to take informed steps
toward reducing and offsetting them.
</p>
</div>
</div>
<div class="col-12 col-md-2"></div>
</div>
</div>
</div>
</div>
</section>



<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

            <h4 class="">Contributors to Carbon Footprint</h4>
        </div>
        <div class="row g-4">




            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" v-for="(l,key) in emissionSourse" :key="key">
                <div class="service-item position-relative overflow-hidden bg-light d-flex h-100 p-5 ps-0 ">
                    <div class="bg-success d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <b-icon icon="clouds-fill" class="text-white" scale="2"></b-icon>
                    </div>
                    <div class="ps-4">
                        <h5 class=" mb-3 text-dark">{{ l.title }} </h5>
                        <p>
                        {{ l.description }}
                        </p>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>




<section class="bg-dark border-dark-bottom">
<div class="container-xxl py-5 px-0 wow zoomIn " data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
    <div class="row g-0 p-0">
        <div class="col-md-7 bg-dark d-flex align-items-center">
            <div class="p-5">
                <h6 class="section-title text-start text-danger text-uppercase mb-3 ">Manage your carbon footprint</h6>
                <h3 class="text-white mb-4">Understanding Carbon Footprint</h3>
                <p class="text-white mb-4">A carbon footprint is the total amount of greenhouse gases (GHGs) emitted directly or indirectly by human activities, typically measured in units of carbon dioxide (CO2) equivalents.</p>
                <p class="text-white mb-4">
                    Every person, business, or organization contributes to the global emissions that drive climate change. From the electricity we use to the waste we generate, these activities release GHGs like carbon dioxide (CO₂), methane (CH₄), and nitrous oxide (N₂O), which trap heat in the Earth's atmosphere and lead to global warming.
                </p>

            </div>
        </div>










        <div class="col-md-5 bg-secondary">
            <div class="p-5">
                <!-- <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6> -->
                <h1 class="text-white mb-4 text-uppercase"> How to Reduce Your Carbon Footprint</h1>
                <ul class="white-text">
                <li v-for="(r,key) in rediceFootprint" :key="key">
                <p>
                  {{ r.content }}
                </p>
                </li>
                </ul>
                <div class=" mt-3">
                    <a href="#"  class="btn btn-lg btn-dark"> <b-icon icon="calculator" variant="white" class="mr-2"></b-icon>Calculate your carbon footprint</a>
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
BannerComponent
},
data(){return{
emissionSourse:[
{title:'Agriculture',
description:'Agriculture is the largest contributor to Uganda’s greenhouse gas emissions, accounting for nearly 50%.',
icon:''},
{title:'Deforestation and Land-Use Change',
description:'Uganda’s forest cover is rapidly decreasing due to deforestation, driven by the need for farmland, timber, and fuelwood.',
icon:''},
{title:'Energy Sector',
description:'The energy sector is another significant source of emissions in Uganda, primarily from the fossil fuels, biomass use, hydropower and renewable energy.',icon:''},
{title:'Waste Management',
description:'Improper waste management is another source of emissions, particularly from landfills and burning of wastes.',
icon:''},
{title:'Industrial Activities',
description:"While Uganda’s industrial sector is still relatively small, it is growing and contributing to the country's emissions. Industrial emissions mainly come from cement manufacturing, construction material production and plastics among others.",
icon:''},
{title:'Transportation',description:'Uganda’s transportation sector contributes an increasing share of emissions as the number of motor vehicles grows.',
icon:''},
],


//footprint content
rediceFootprint:[
{content:'Switch to renewable energy like solar or hydroelectric.'},
{content:'Use energy-efficient appliances for lighting, cooking and heating.'},
{content:'Choose sustainable transport such as walk, bike, carpool, use public transportation, electric or hybrid vehicles.'},
{content:'Eat local and plant-based foods and reduce meat and dairy consumption.'},
{content:'Reduce, reuse, recycle items like plastic, paper, and glass.'},
{content:'Offset your carbon footprint by investing in carbon credits and supporting carbon reduction projects and businesses.'},



],







    }},

computed:{
image_url(){
return this.$page.props.system.url+'public/images/';
},

icon_url(){
return this.$page.props.system.url+'public/icons/';
}

}
}
</script>
<style scoped>
ol li{
margin:0;
margin-bottom: 30px;
margin-top: 30px;
padding:0;


}
ol li p{
padding:0px;
}
ul,ol{
margin:0;
padding:0;
}

.white-text li p{
color:white;
}
ul li{
    list-style-type: disc;
    color:rgb(188, 228, 188);
    margin-bottom:5px;

    padding:5px;
}
</style>