<template>
<div class="container-fluid feature bg-light2 py-0" style="margin-top:-35px;border-bottom:solid 1px  #e9edf0;">
<div class="container py-5 ">
<div class="row">

<div class="col-12 col-md-8 offset-lg-2">

<h1 class="text-dark2 pt-4 text-center" style="font-size:25px;">
<span class="section_title1"> {{ title }}
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