<template>
<div class="container-fluid bg-dark p-5" style="margin-top:-30px;border-bottom:solid 3px #ec7063 ;">
    <div class="row">
    <div class="col-12 text-center">
    <h1 class="text-white" style="font-size:30px;">{{ title }}</h1>
    <div>
    <p class="text-white">{{ subtitle }} </p>
    </div>
    </div>
    </div>
    </div>
</template>
<script>
export default {
props:{
subtitle:{}
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