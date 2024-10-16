<template>
<landing-layout>
<banner-component/>


<div class="container-fluid feature py-0">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<p class="mb-0 text-left">

</p>
<h4>
    Work in progress..
</h4>

</div>
</div>
</div>


<section style="min-height:500px;">
<div class="container py-5">
 
</div>

</section>

















</landing-layout>
</template>
<script>
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';
import ContactComponent from '../components/ContactComponent.vue';
export default {
components:{
BannerComponent,
LandingLayout,
ContactComponent

    }
}
</script>
<style scoped>
ul li{
margin-bottom:15px;
list-style:upper-roman;
}

</style>