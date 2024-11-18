<template>
<div class="bg-green-light pt-5">
<div class="row py-5 pl-5 pr-5 shadow-sm">
<div class="col-12 col-md-8 offset-lg-2 pl-4 pr-4">
    <h1 class="text-dark2 pt-3 text-center" style="font-size:25px;">
        <span class="text-green"> {{ title }}
        </span>
        </h1>
        <p class="mb-0 text-left mt-3 ">
        {{ subtitle }}
        </p>
        <slot/>


</div>
</div>
</div>
</template>
<script>
export default {
props:{
subtitle:{},
},
data(){return{
title:this.$page.props.title,




}}
}
</script>
<style scoped>
h1,h2,h3,h4,h5,h6{
    letter-spacing: 0.3px;
    }


    .coverBanner{
        background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
        background-size: cover;
        background-position: 100% 50%;
        height: 300;
        margin:0;

        }
</style>