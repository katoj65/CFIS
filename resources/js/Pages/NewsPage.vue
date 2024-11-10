<template>
<landing-layout>
<banner-component/>
<section>
<div class="container">
<div class="row">

<div class="col-12 col-md-8 offset-2">


some information



</div>

</div>
</div>
</section>
</landing-layout>
</template>
<script>
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';
export default {
components:{
BannerComponent,
LandingLayout

    },

props:{
title:{},
response:[],
},

data(){return{






}}




}
</script>