<template>
<app-layout :title="'News and Updates'" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary" :href="route('admin.news_create')">
    <b-icon icon="plus-square-fill" aria-hidden="true"></b-icon> Create
</Inertia-link>
</template>



<section>
<div class="row">

<div class="col-12 col-md-4 mb-4" v-for="(a,key) in news" :key="key">
<Inertia-link :href="route('admin.news_show',{id:a.id})">
    <div class="card shadow-sm h-100">
        <img src="https://picsum.photos/400/200/?image=41" class="card-img-top" alt="..." v-if="a.file!=null">
        <div class="card-body">
          <h5 class="card-title text-capitalize">{{ a.title}}</h5>
          <p class="card-text">
        {{ a.description }}
          </p>
          <p class="card-text"><small class="text-dark">
        Date: {{ a.created_at }}
          </small></p>
        </div>
      </div>





    </Inertia-link>
</div>

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