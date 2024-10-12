<template>
<landing-layout>
<!-- <banner-component/> -->
<!-- <div class="cover" style="padding-left:100px;"></div> -->



<section class="bg-dark" style="margin-top:-15px;">
<div class="container-xxl py-5 bg-dark">
<div class="container">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h1 class="text-white mb-4">KNOWLEDGE <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;">HUB</span></h1>

<p class="text-white mb-2">
The Knowledge Hub is an online and physical resource center within the Uganda Carbon Registry designed to support stakeholders across Uganda in accessing vital climate-related knowledge. The Hub serves as a one-stop platform offering educational resources, industry data, practical toolkits, and expert insights tailored to Uganda’s unique environmental, economic, and regulatory landscape.
</p>
</div>

</div>
</div>
</section>

















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
list-style-type:upper-roman;
margin-bottom: 10px;
}
h1,h2,h3,h4,h5,h6{
letter-spacing: 0.3px;
}
.cover{
    background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
    height: 400px;
    background-size: cover;
    background-position: 100% 40%;
    margin:0;

    }
</style>