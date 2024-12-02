<template>
<app-layout :title="title" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary">Carbon Market</Inertia-link>
</template>



<div class="container p-0">
<div class="row mb-3">
<div class="col-12 col-md-4">

<div class="card card-bordered h-100">
<div class="card-inner">
<div class="card-title-group align-start mb-2">
<div class="card-title">
<h6 class="title">Total Emission</h6>
<!-- <p>Shrink your footprint, live greener today.</p> -->
</div>
<div class="card-tools">

</div>
</div>
<div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
<div class="nk-sale-data-group flex-md-nowrap g-4">
<div class="nk-sale-data">
<span class="amount">{{ response.data.total_emission.amount }} <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>Kg CO2e</span></span>
<span class="sub-title">
Since date:  {{ response.data.total_emission.date}}
</span>
</div>
</div>
</div>
</div>
</div>
</div>





<div class="col-12 col-md-8">
<div class="card card-bordered h-100">
<div class="card-inner">
<div class="card-title-group align-start gx-3 mb-3">
<div class="card-title">
<h6 class="title">Cost of Your Carbon Footprint</h6>
<!-- <p>Track emissions over time and aim for steady reductions.</p> -->
</div>
</div>
<div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
<div class="nk-sale-data">
<div>
<span class="amount">
Shs. {{ response.data.shillings }}
<span class="text-white badge badge-pill badge-light border-0 ml-3" style="font-size:13px;">
$ {{ response.data.dollars }}
</span>
</span>
</div>
<span class="sub-title">
The amount required to offset your carbon emissions
</span>
</div>
<div class="nk-sale-data">
<Inertia-link class="btn btn-outline-danger" :href="route('emission.targets')"><small>Emission Targets</small></Inertia-link>
</div>
</div>

</div>
</div>

</div>
</div>








<div class="row">
<div class="col-12 col-md-8">

<div class="card card-bordered card-full h-100">
<div class="card-inner">
<div class="card-title-group">
<div class="card-title">
<h6 class="title">Carbon Footprint Summary</h6>
</div>
<div class="card-tools">
<Inertia-link :href="route('user.emission_summary')" class="link text-muted">View All</Inertia-link>
</div>
</div>
</div>


<div class="card-inner p-0">

<table class="table">
<thead class="border-0">
<tr>
<th scope="col" class="border-0">#</th>
<th scope="col" class="border-0">Emission Activity</th>
<th scope="col" class="border-0">Source</th>
<th scope="col" class="border-0" style="width:100px;">Emission(CO2e) </th>
</tr>
</thead>
<tbody class="border-0" v-if="summary.length>0">
<tr v-for="(s,key) in summary" :key="key">
<th scope="row" class="border-0 text-muted">{{ key+1}} </th>
<td class="border-0 text-muted" style="text-transform: capitalize;">
<Inertia-link :href="route(s.url,{id:s.id})" class="text-muted"> {{ s.number_of_emitters }} {{ s.emitter }}</Inertia-link>
</td>
<td class="border-0 text-muted" style="text-transform: capitalize;">
{{ s.type }}
</td>
<td class="border-0 text-muted">
{{ s.carbon_emission }} Kg
</td>
</tr>

</tbody>
<tbody v-else class="border-0">
<tr class="border-0">
<td class="border-0 py-5 text-center text-muted" colspan="4">
You have not submitted any emission data
</td>
</tr>
</tbody>
</table>



</div>

</div>

</div>
<div class="col-12 col-md-4">


<div class="card card-bordered h-100">
<div class="card-inner ">
<div class="card-title-group">
<div class="card-title">
<h6 class="title">Reduction Goals</h6>
</div>
<div class="card-tools">
<a href="#" class="link text-muted">View All</a>
</div>
</div>
</div>
<div class="card-inner">
<ul class="p-0 m-0">
<li v-for="(g,key) in response.data.target" :key="key" class="p-0 m-0">
<div class="mb-2">
<Inertia-link :href="route('emission.target_show',{id:g.id})" class="text-muted">
<small>{{ g.emission_activity }} ({{ g.emission_percentage }}%) </small>
<progress-bar :percentage="g.current_percentage"/>
</Inertia-link>
</div>
</li>

</ul>


</div>
</div>

</div>
</div>






<div class="row mt-4">
<div class="col-12">

<div class="card card-bordered h-100">
<div class="card-inner-group">
<div class="card-inner card-inner-md border-0">
<div class="card-title-group">
<div class="card-title">
<h6 class="title pt-2">
Community and Social Impact
</h6>
</div>
<div class="card-tools mr-n1">

</div>
</div>
</div><!-- .card-inner -->
<div class="card-inner">
<div class="row">




<div class="col-12 col-md-4">
<div class="card mb-3 p-3 h-100" style="max-width: 540px;">
<h6 class="text-muted">Reports</h6>
<ul class="list-group list-group-flush">
<li class="list-group-item text-muted" style="border:none" v-for="(r,key) in reports" :key="key">
<Inertia-link class="text-muted text-capitalize">
<i class="bi bi-file-spreadsheet-fill"></i> {{ r.report }}</Inertia-link>
</li>
</ul>
</div>
</div>




<div class="col-12 col-md-4">
<div class="card mb-3 p-3 h-100">
<h6 class="text-muted">Learn with Us</h6>
<ul class="list-group list-group-flush">
<li class="list-group-item text-muted" style="border:none" v-for="(s,key) in topics" :key="key">
<Inertia-link class="text-muted">
<i class="bi bi-file-spreadsheet-fill"></i> {{ s.title }}</Inertia-link>
</li>
</ul>
</div>
</div>

<div class="col-12 col-md-4">
<div class="card mb-3 p-3 h-100">
<h6 class="text-muted">Collective Impact</h6>
<p>Collaboration fuels progress.</p>
<div>
<b-avatar-group size="2rem">
<b-avatar></b-avatar>
<b-avatar></b-avatar>
<b-avatar></b-avatar>
<b-avatar></b-avatar>
<span class="ml-2" style="font-size:18px;">20+</span>
</b-avatar-group>
</div>

<ul class="list-group list-group-flush mt-2">
<li class="list-group-item  d-flex justify-content-between align-items-center" v-for="(a,key) in 4" :key="key" style="border:none;">
<a href="" class="text-muted">
<b-icon icon="caret-right-fill" class="mr-1"></b-icon>
Name of the project

<!-- <span class="badge text-bg-primary rounded-pill">14</span> -->


</a>
</li>
</ul>



</div>


</div>


</div>



</div>
</div><!-- .card-inner-group -->
</div>



</div>
</div>



















</div>

</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
import ProgressBar from '../../components/ProgressBar.vue';
export default {
components:{
AppLayout,
ProgressBar,
},
props:{
response:[],
},

data(){return{
title:'Welcome '+this.$page.props.user.firstname,
subtitle:'Reduce emissions, get carbon credits, and join the climate solution.',
offsetOptions:[
{title:'Purchase Carbon Credit',icon:'',url:''},
{title:'Invest in Impactful Projects',icon:'',url:''},
{title:'Support Local Initiatives',icon:'',url:''},
{title:'Carbon Offset Subscription',icon:'',url:''},
],

reports:this.response.data.reports,

topics:[
{title:'Carbon Credit',url:''},
{title:'Climate Financing',url:''},
{title:'Carbon Offset',url:''},
{title:'Regilations & Policies',url:''},
{title:'Emission Reduction Projects',url:''},


]




}},

computed:{
summary(){
console.log(this.response);
return this.response.data.emission_summary;
},
},









}
</script>
<style scoped>
.list-group-item{
margin:0px;
padding:0;
margin-bottom:5px;
}
</style>