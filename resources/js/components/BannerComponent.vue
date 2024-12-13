<template>
<div class="pt-5" style="background:#15583b;">
<div class="row py-5 pl-5 pr-5 shadow-sm">
<div class="col-12 col-md-8 offset-lg-2 pl-4 pr-4">
<h3 class="text-white-stable mb-3 pt-3 text-center text-white">
<span> {{ title }}
</span>
</h3>
<p class="mb-0 text-left mt-4 text-white" style="font-size:17px;">
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