<template>
<app-layout :title="'News and Updates'" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary" :href="route('admin.news_create')">
    <b-icon icon="plus-lg" aria-hidden="true"></b-icon> Create
</Inertia-link>
</template>



<section>
<div class="row" v-if="news.length>0">

<div class="col-12 col-md-4 mb-4" v-for="(a,key) in news" :key="key">
<Inertia-link :href="route('admin.news_show',{id:a.id})">
    <div class="bg-white card   p-3 h-100" style="border:solid 1px  #e9edf0;">
        <figure class="mb-3 card-lift">
        <img src="http://localhost/carbon/public/images/deforestation.jpeg" class="img-fluid" />
        </figure>
        <div>
        <h6 style="text-transform:initial;">{{ a.title }} </h6>
        <div class="ms-2">
        <span class="text-muted">
        {{ a.description }}
        </span>
        <div>
        <small class="text-dark">
        Date: {{ a.created_at }}
        </small>
        </div>
        </div>
        </div>
        </div>





    </Inertia-link>
</div>
</div>
<div v-else class="text-center p-5 m-5">
<h6 class="text-center text-muted">No news articles</h6>
</div>



</section>











</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
import '../../javascript/helper.js';
export default {
components:{
AppLayout
},
props:{
response:[],
},

data(){return{
subtitle:'Stay Updated with the Latest Environmental Breakthroughs.',



}},

computed:{
news(){
const articles=[];
let content=this.response.news;
content.forEach(element => {
articles.push({
title:element.title,
description:element.description.length>130?element.description.substring(0, 130)+'...':element.description,
id:element.id,
created_at:element.created_at,
file:element.file

});
});


return articles;
}




}






}
</script>