<template>
<landing-layout>
<section class="p-0">
<div class="px-4 pt-5 my-5 text-center">
<h3 class="display-6 fw-bold text-body-emphasis">
Education Hub
</h3>
<div class="col-lg-6 mx-auto">
<p class="lead mb-4" style="font-size:17px;">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>

</div>
<div class="overflow-hidden" style="max-height: 30vh;">
<div class="container px-5">
<img src="http://localhost/carbon/public/images/deforestation.jpeg" class="img-fluid rounded-3 mb-4" alt="Example image" width="700" height="500" loading="lazy">
</div>
</div>
</div>
</section>













</landing-layout>
</template>
<script>

import LandingLayout from '../Layouts/LandingLayout.vue';
export default {
components: {
LandingLayout,

 },
data(){return{

images:{
background:'http://localhost/carbon/public/images/deforestation.jpeg',
climate_impact:'http://localhost/carbon/public/images/climate_change_impact.png',

}

}},


computed:{
url(){
return this.$page.props.system.url;
},




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
.cover2{
background-image: url('http://localhost/carbon/public/images/carbon.jpg');
background-position: 100% 100%;
height:500px;
background-size: cover;
}



</style>