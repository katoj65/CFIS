<template>
<div class="container-fluid feature bg-white py-0" style="margin-top:-30px;">
<div class="container py-5 ">
<div class="row">


<div class="col-12 col-md-8 offset-lg-2">

<h1 class="text-dark2 pt-5 text-center" style="font-size:30px;">
<span class="title-font2"> {{ title }}
</span>
</h1>
<p class="mb-0 text-left  mt-3">
{{ subtitle }}
</p>
<slot/>
</div>



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
</style>