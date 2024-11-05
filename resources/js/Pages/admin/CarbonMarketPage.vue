<template>
<app-layout :title="title" :subtitle="'Transparent, Traceable, and Trustworthy.'">


<div>




<div class="card card-bordered card-preview">
<table class="table table-ulogs">
<thead>
<tr>
    <th class="border-0">Project</th>
    <th class="border-0">Category</th>
    <th class="border-0">Carbon Credit</th>
    <th class="border-0" style="width:50px;"></th>
</tr>
</thead>

<tbody style="border:none;">
<tr v-for="(k,key) in 200" :key="key">
    <td>Chrome on Window</td>
    <td><span class="sub-text">192.149.122.128</span></td>
    <td><span class="sub-text">11:34 PM</span></td>
    <td></td>
</tr>


</tbody>
</table>
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
response:[],
},

data(){return{




}},





}
</script>

<style scoped>
table head{border-bottom:solid thin #eaeded;}
table tr th{border:none;border-bottom:solid thin #eaeded;}
table tr td{border:none;border-top:solid thin #eaeded;}
table tr th{padding:15px;}
</style>