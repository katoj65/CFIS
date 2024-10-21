<template>
<landing-layout>
<banner-component :subtitle="'The Uganda Carbon Registry is a pioneering platform designed to track, verify, and facilitate carbon reduction and offset projects across Uganda. The registry offers a robust, transparent, and accessible system for managing carbon credits and supporting national and international climate goals.Our platform is committed to providing accessible carbon footprint management and carbon credit microfinance, empowering you to make a significant impact while driving sustainable growth.'"/>
<!--
<div class="container-fluid feature bg-light2 py-0" style="margin:-15px;">
    <div class="container py-5">
    <div class="text-center mx-auto wow fadeInUp" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <h3 class="mb-3 text-dark">
      {{ $page.props.title }}
    </h3>
    <p class="mb-0 text-left text-dark">
    We are committed to driving climate action by integrating carbon mitigation strategies with financial solutions for individuals, businesses, and organisations. Our services focus on providing sustainable pathways to reduce carbon footprints while unlocking financial resources to support greener initiatives.
    </p>


    </div>
    </div>
    </div> -->








<section>
<div class="container-fluid feature bg-white py-0">
<div class="container py-5" style="height:500px;">









</div>
</div>
</section>


















</landing-layout>
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
{title:'Measure and Assess Your Carbon Emissions'},
{title:'Set Your Carbon Emission Reduction Target'},
{title:'Implement Your Carbon Reduction Strategies'},
{title:'Offset Your Carbon Emissions'},
{title:'Monitor and Report Your Progress'},

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