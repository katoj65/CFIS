<template>
<app-layout :title="'News and Updates'" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary" :href="route('admin.news')">
    News
</Inertia-link>
</template>



<section>
<div class="row">











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