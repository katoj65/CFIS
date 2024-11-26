<template>
<app-layout :title="title" :subtitle="subtitle">
<div class="container p-0">
<div class="row">

<div class="col-12">


<div class="card card-bordered h-100">
<div class="card-inner">
<div class="card-title-group align-start mb-3">
<div class="card-title">
<h6 class="title">Emission Details</h6>

</div>
<div class="card-tools mt-n1 mr-n1">

</div>
</div><!-- .card-title-group -->
<div class="nk-order-ovwg">

<el-tabs v-model="activeName">
<el-tab-pane label="Summary" name="first">



<table class="table" v-if="log.length>0">
<thead class="thead-light border-0">
<tr class="border-0">
<th scope="col" class="border-0">Activity</th>
<!-- <th scope="col" class="border-0">Source</th> -->
<th scope="col" class="border-0">Appliances</th>
<th scope="col" class="border-0">Consumption</th>
<th scope="col" class="border-0">Number</th>
<th scope="col" class="border-0">Emission (CO2e)</th>
<th scope="col" class="border-0">Date</th>
<th scope="col" class="border-0" style="width:10px;"></th>
</tr>
</thead>
<tbody class="border-0">
<tr v-for="(l,key) in log" :key="key">
<td class="border-0 text-muted" style="text-transform:capitalize;">
<Inertia-link :href="route(l.url,{id:l.id})" class="text-muted"> <i class="bi bi-cloud-fog mr-2" style="font-size:17px;"></i>   {{ l.emission_activity  }} </Inertia-link>
</td>
<!-- <td class="border-0 text-muted" style="text-transform:capitalize;">{{ l.type}} </td> -->
<td class="border-0 text-muted text-left" style="text-transform:capitalize;">
<Inertia-link class="text-muted" :href="route(l.url,{id:l.id})" >
{{ l.emitter }}
</Inertia-link>
 </td>
<td class="border-0 text-muted text-left">{{ l.consumption_rate }}
</td>
<td class="border-0 text-muted">{{ l.number_of_emitters }}</td>
<td class="border-0 text-muted">{{ l.carbon_emission }} Kg </td>
<td scope="row" class="border-0 text-muted">{{ l.created_at }}</td>
<td class="border-0 text-muted">
<i class="bi bi-check-circle" v-if="l.portifolio=='true'"></i>
</td>
</tr>
</tbody>
</table>
<div v-else class="p-3 table-light">
No emission has been calculated
</div>



</el-tab-pane>
<el-tab-pane label="Statistics" name="second">






</el-tab-pane>
<el-tab-pane label="Recommendations" name="third">






</el-tab-pane>
</el-tabs>












</div><!-- .nk-order-ovwg -->
</div><!-- .card-inner -->
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
response:[],
},
data(){return{
subtitle:'From conserving electricity to reducing waste, your actions can make a big difference. Start now!',
log:this.response.data,
activeName: 'first'




}}
}
</script>
<style scoped>
td{padding:10px;}
</style>