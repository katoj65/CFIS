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
        BannerComponent,

    },

data(){return{
subtitle:'',




}}
}
</script>

<style scoped>
ul li{
margin-bottom: 20px;
list-style:circle;
}
</style>