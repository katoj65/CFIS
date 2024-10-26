<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<section class="py-5">
<div class="container">
<div class="row">

<div class="col-12 col-md-8 offset-lg-2">



some information goes here



</div>
</div>
</div>
</section>





</landing-layout>
</template>
<script>
import LandingLayout from '../../Layouts/LandingLayout.vue';
import BannerComponent from '../../components/BannerComponent.vue';
export default {
components:{
LandingLayout,
BannerComponent,

},


data(){return{
subtitle:'Carbon Microfinance is an innovative financial service provided by the Uganda Carbon Registry, designed to make climate finance accessible to all, especially to small-scale projects, grassroots initiatives, and underserved communities. It enables organisations, businesses, and individuals to invest in carbon reduction and offsetting activities, generating carbon credits that contribute to the carbon market. ',




    }}
}
</script>