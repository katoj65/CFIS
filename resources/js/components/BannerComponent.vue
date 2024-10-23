<template>




    <div class="container-fluid feature bg-white py-0" style="margin-top:-30px;">
        <div class="container py-5 mb-3">
        <div class="text-center mx-auto wow fadeInUp" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <h1 class="text-dark2 pt-5" style="font-size:30px;">
               <span class="title-font2" style="font-family:'Times New Roman', Times, serif;"> {{ title }}
                </span>
               </h1>
        <p class="mb-0 text-left  mt-3">
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
</style>