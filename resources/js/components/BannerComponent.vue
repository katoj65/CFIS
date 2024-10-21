<template>




    <div class="container-fluid feature bg-dark2 py-0" style="margin-top:-30px;border-bottom:solid 3px #ec7063;">
        <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h1 class="text-white pt-5" style="font-size:30px;">{{ title }}</h1>
        <p class="mb-0 text-left text-white mt-3" style="font-size:15px;">
            {{ subtitle }}
        </p>


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