<template>
<landing-layout>
<banner-component/>



<div class="container-fluid feature bg-white py-0">
<div class="container py-5">
<div class="text-left mx-auto wow fadeInUp" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

  

<p class="mb-0">
In the fight against climate change, carbon credits have emerged as a key tool to reduce greenhouse gas (GHG) emissions while fostering economic growth. For Uganda, a country balancing development with environmental sustainability, carbon credits offer a unique opportunity to transform emissions into economic value. The Uganda Carbon Registry is leading the charge in this transformation, helping businesses, communities, and investors tap into the benefits of carbon credits while contributing to global climate action.
</p>

</div>
</div>
</div>








<div class="container my-5">
    <div class="row align-items-center align-items-xl-stretch flex-column flex-xl-row">
        <div class="col-12 col-sm-10 col-md-7 col-lg-6 col-xl-4 mb-2" v-for="(c,key) in carbonCredit" :key="key">


            <div class="p-5 h-100 d-flex flex-column bg-body-tertiary shadow rounded-4">
                <h4>{{ c.title }} </h4>

                <p class="lead" style="font-size:18px;">
                  {{ c.description }}
                </p>
                <hr class="opacity-10">
                <h5 class="my-2">Activities include:</h5>
                <div class="my-1 text-body-secondary">

                    <!-- <span>
                        50 Placeholder text commonly
                    </span> -->
                </div>
                <div class="mt-2 text-body-secondary" v-for="(s,key) in c.items" :key="key">
                    <span class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path>
                        </svg>
                    </span>
                    <span>
                        {{ s.title }}
                    </span>
                </div>

                <div class="mt-auto">
                    <Inertia-link :href="route(c.url)" class="btn btn-success text-white mt-4 w-100">
                        Read More
                        </Inertia-link>
                </div>
            </div>



        </div>

    </div>
</div>




<!--
<div class="container-fluid bg-light about py-3">
    <div class="container pb-5">
        <div class="row g-0">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h6 class="text-danger">Emission Reduction</h6>
                    <h4 class="display-7 mb-4">How the Carbon Credit System Works in Uganda</h4>
                    <p> The carbon credit system in Uganda is part of a global effort to curb climate change by incentivising emission reductions. Uganda generates carbon credits through a variety of projects, including reforestation, clean energy, and sustainable agriculture.
                    </p>
                    <div>

                    <p>
                        A carbon credit represents the reduction or removal of one metric ton of carbon dioxide (CO₂) or its equivalent in other greenhouse gases from the atmosphere.
                    </p>
                    <ul style="padding:0;">
                    <li>
                        Reforestation. Planting trees that absorb CO2 from the atmosphere.
                    </li>
                    <li>
                        Renewable Energy. Replacing fossil fuel-based energy with clean energy sources like solar.
                    </li>
                    <li>
                        Sustainable Agriculture. Adopting climate-smart farming practices that reduce emissions from land use.
                    </li>
                    <li>
                        Clean Cooking. Reducing emissions by providing energy efficient cooking solutions to households.
                    </li>
                    </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">

                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-danger fs-2 fw-bold" data-toggle="counter-up">5</span>

                                </div>
                                <h4 class="mb-0 text-dark">Projects</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-danger fs-2 fw-bold" data-toggle="counter-up">USD 5M</span>

                                </div>
                                <h4 class="mb-0 text-dark">Funds</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-danger fs-2 fw-bold" data-toggle="counter-up">556</span>

                                </div>
                                <h4 class="mb-0 text-dark">Businesses</h4>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-danger fs-2 fw-bold" data-toggle="counter-up">967</span>

                                </div>
                                <h4 class="mb-0 text-dark">Organisations</h4>
                            </div>
                        </div>



                        <div class="col-sm-12">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-danger fs-2 fw-bold" data-toggle="counter-up">967</span>

                                </div>
                                <h4 class="mb-0 text-dark">Team Members</h4>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->













<section class="bg-dark border-dark-bottom">
    <div class="container-fluid bg-dark my-0">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-7 py-5 py-lg-0 pr-5">
        <h6 class="text-primary text-uppercase font-weight-bold text-danger">Offset Your Carbon Footprint</h6>
        <h4 class="mb-4 text-white">Benefits of Carbon Credit</h4>
        <p class="mb-2 text-white">Carbon credits offer a unique opportunity for countries like Uganda to benefit economically, socially, and environmentally while reducing greenhouse gas emissions.</p>

        <p class="mb-2 text-white"> Carbon credits have the potential to drive sustainable development in Uganda, helping the country meet its climate goals while improving the quality of life for its citizens.</p>





        </div>
        <div class="col-lg-5">
        <div class="bg-secondary py-5 px-4 px-sm-5">
        <form class="py-5">
            <h4 class="text-white mb-4">Why buy carbon credits?</h4>
           <p class="text-white" style=""> Buying carbon credits is a practical and impactful way for individuals and businesses to reduce their carbon footprint and take responsibility for their greenhouse gas emissions. </p>
        <div class="pt-3">
        <a href="#" class="btn btn-dark btn-block border-0 py-3">Buy Carbon Credit</a>
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
components: { LandingLayout,BannerComponent },
data(){return{
carbonCredit:[
{
title:'Project Development',
description:'Certified projects are established to reduce or remove CO2 from the atmosphere.',
url:'carbon.project-development',
items:[
{title:'Project identification.'},
{title:'Project design.'},
{title:'Project registration.'},
{title:'Project validation.'},
{title:'Project monitoring.'},
{title:'Project verification.'},
]
},

{
title:'Buying Carbon Credit',
description:'Businesses, organisations or individuals can purchase carbon credits to offset their emissions.',
url:'carbon.purchase-carboncredit',
items:[
{title:'Calculate your carbon footprint.'},
{title:'Identify the type ofcarbon credit.'},
{title:'Select a varified project.'},
{title:'Determine the number of credits.'},
{title:'Make a purchase.'},
{title:'Receive carbon credit.'},
]
},

{
title:'Emission Offsetting',
description:'By purchasing carbon credits, buyers are able to offset their unavoidable emissions, whether from business operations, travel, or personal energy use.',
url:'carbon.offestting',
items:[
{title:'Purchase carbon credits.'},
{title:'Receive a certificate.'},
{title:'Track your carbon offset.'},
{title:'Monitor and report your emissions.'},
{title:'Support a carbon reduction project.'},

]
},







],





}},


computed:{
url(){
return this.$page.props.system.url;
}


}





}
</script>
<style scoped>


ul li{
    list-style-type: circle;
    margin-bottom: 3px;
    }
h5{
color:black;
}
</style>