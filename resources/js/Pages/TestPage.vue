<template>
<div>
  <section class="hero-section d-flex align-items-center justify-content-center text-white py-5" style="background-image: url('http://localhost/carbon/public/images/deforestation.jpeg'); background-size: cover; background-position: center; height: 100vh;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">Welcome to Uganda Carbon Registry</h1>
        <p class="lead mb-4">Empowering a sustainable future through carbon management and environmental innovation.</p>
        <a href="#services" class="btn btn-primary btn-lg">Explore Our Services</a>
    </div>
</section>

  <section id="services" class="container my-5">
    <h2 class="text-center mb-4">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service1.jpg" class="card-img-top" alt="Service 1">
                <div class="card-body">
                    <h5 class="card-title">Carbon Footprint Tracking</h5>
                    <p class="card-text">We provide tools to help businesses and individuals track their carbon emissions effectively.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service2.jpg" class="card-img-top" alt="Service 2">
                <div class="card-body">
                    <h5 class="card-title">Emissions Reduction Strategies</h5>
                    <p class="card-text">Consulting services to create customized plans for reducing greenhouse gas emissions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service3.jpg" class="card-img-top" alt="Service 3">
                <div class="card-body">
                    <h5 class="card-title">Climate Policy Guidance</h5>
                    <p class="card-text">Expert advice on aligning operations with local and international climate regulations.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service4.jpg" class="card-img-top" alt="Service 4">
                <div class="card-body">
                    <h5 class="card-title">Sustainability Reporting</h5>
                    <p class="card-text">Assistance with creating and maintaining comprehensive sustainability reports.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service5.jpg" class="card-img-top" alt="Service 5">
                <div class="card-body">
                    <h5 class="card-title">Carbon Credit Registration</h5>
                    <p class="card-text">Guidance through the process of registering and managing carbon credits.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service6.jpg" class="card-img-top" alt="Service 6">
                <div class="card-body">
                    <h5 class="card-title">Workshops and Training</h5>
                    <p class="card-text">Educational sessions on carbon management and sustainable practices.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service7.jpg" class="card-img-top" alt="Service 7">
                <div class="card-body">
                    <h5 class="card-title">Partnerships and Collaborations</h5>
                    <p class="card-text">Connecting stakeholders for impactful carbon reduction projects.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100">
                <img src="service8.jpg" class="card-img-top" alt="Service 8">
                <div class="card-body">
                    <h5 class="card-title">Technical Support</h5>
                    <p class="card-text">24/7 assistance for technical questions and project implementation.</p>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';

export default {
components: {
LandingLayout,
BannerComponent,

},

data(){return{
tab:[
{title:'Emission Tracking',description:'Managing your carbon emissions helps protect the environment and builds a sustainable future.'},
{title:'Carbon Markets',description:'investing in carbon credits can offset your carbon footprint and support projects that reduce emissions and protect the environment.'},
{title:'Project Development',description:'Partner with us to develop projects that reduce emissions, benefit communities, and create a greener future.'},
{title:'Microfinance Services',description:'Save, borrow, and fund for a sustainable future! Your actions can power eco-friendly projects, reduce emissions, and uplift communities.'},
],

//links
links:[
{name:'Carbon Emissions in Uganda',url:'emissions.uganda'},
{name:'Buy or Sell Carbon Credit',url:'emissions.uganda'},
{name:'Become a project developer',url:'emissions.uganda'},
{name:'News and Updates',url:'emissions.uganda'},
{name:'Community Connections',url:'emissions.uganda'},
{name:'See Our Partners',url:'emissions.uganda'},



],

stepper:[
    {title:'Carbon Footprint Management',
description:'Tools to help businesses, organisations, and individuals track, measure, and reduce carbon emissions to contribute to national emission reduction targets and Uganda’s NDCs under the Paris Agreement.',
url:'cfis.overview'
},
{title:'Carbon Fund',
description:'Get access to financial resources to invest in projects aimed at reducing greenhouse gas emissions, generating carbon credits that can be sold in carbon markets.',
url:'market.overview'
},
{title:'Carbon Markets',
description:'Entities can use the registry to participate in carbon markets, buying and selling carbon credits to offset their emissions and support greenhouse gas reduction projects, assisting Uganda in meeting its climate commitments.',
url:'microfinance.overview'
},
{title:'Carbon Offset Projects',
description:'Facilitating the development of carbon offset projects that decrease or eliminate emissions, such as reforestation and clean energy initiatives. These projects produce carbon credits, promoting sustainable practices and contributing to Uganda’s low-carbon growth path.',
url:'projects.overview'
}

  ],




}},


computed:{
url(){
return this.$page.props.system.url;
}
},





}
</script>
<style scoped>
.cover{
background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
background-size: cover;
background-position: 100% 100%;
margin:0;

}
ul li{
margin-bottom:20px;
}
ul{
margin-top:20px;
}

ul li p{
font-size: 18px;
}
p{

}

.form-control-wrap{
margin-bottom:10px;
}
</style>