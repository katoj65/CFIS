<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>














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
subtitle:'The Uganda Carbon Registry offers a comprehensive range of services aimed at advancing climate action, sustainable development, and economic resilience.',



}}




}
</script>