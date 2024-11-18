<template>
<landing-layout>
<banner-component/>
<section>
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-2">


<div class="row">
<div class="col-md-8">


<article class="blog-post mb-5" v-for="(n,key) in news" :key="key">
<h4>{{ n.title }} </h4>
<p class="blog-post-meta"><i class="bi bi-calendar2-week"></i> {{ n.created_at }} </p>
<p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
<div class="border-bottom pb-4">
    <img :src="n.file" style="border-radius:10px;"/>
</div>
</article>




</div>

<div class="col-md-4">
<div class="position-sticky" style="top: 2rem;">
<div class="p-4 mb-3 bg-body-tertiary rounded">
<h4 class="fst-italic">Updates</h4>
<p class="mb-0">New climate report highlights record breaking temperatures, urging stronger global mitigation efforts..</p>
</div>



<div class="p-4">
<h4 class="fst-italic">Topics</h4>
<ol class="list-unstyled mb-0">
<li v-for="(a,key) in news" :key="key" style="line-height:17px;"><a href="#">
    {{ a.title }}
</a></li>
</ol>
</div>


</div>
</div>
</div>




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
news:this.response.news,





}}




}
</script>