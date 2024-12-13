<template>
<app-layout :title="title" :subtitle="subtitle">
<div class="container p-0">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-inner">

some information goes here

</div>
</div>
</div>
</div>
</div>
</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
export default {
components:{
AppLayout,
},

props:{
title:{},
response:[]
},

data(){return{
subtitle:'Calculate, trade, and invest in Uganda’s carbon market to combat climate change effectively.',









}}


}
</script>