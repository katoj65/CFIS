<template>
<app-layout :title="'News and Updates'" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-outline-secondary" :href="route('admin.news_create')">
    <b-icon icon="plus-square-fill" aria-hidden="true"></b-icon> Create
</Inertia-link>
</template>

{{ response }}

<section>
<div class="row">

<div class="col-12 col-md-4" v-for="(n,key) in 12" :key="key">
    <div class="card mb-3 shadow-sm">
        <img src="https://picsum.photos/400/200/?image=41" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>


<!-- <div class="mb-4">
    <Inertia-link href="#" class="text-dark">
<b-card img-src="https://picsum.photos/400/200/?image=41" img-alt="Image" img-top class="shadow-sm">
<b-card-text>
<h6>Title goes here</h6>
<p> This is a wider card with supporting text below as a natural lead-in to additional content.
This card has even longer content than the first.</p>
</b-card-text>
<template #footer>
<small class="text-muted">Created: 5 Days ago</small>
  </template>
</b-card>
</Inertia-link>
</div>
 -->




</div>

</div>




</section>











</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
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



}
</script>