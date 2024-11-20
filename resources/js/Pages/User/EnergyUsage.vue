<template>
<app-layout :title="title" :subtitle="subtitle">
<div class="container">
<div class="row">
<div class="col-12 col-md-10 offset-lg-1">
<div class="card p-3">
<div class="body">
<div class="card-title">
<h6>
Energy Consumption Summary
</h6>
</div>
</div>
<div class="card-body">

<el-tabs v-model="activeName">
<el-tab-pane label="Consumption" name="first">

<table class="table">
<thead class="table-light border-0">
<tr >
<th class="border-0">
Source
</th>
<th class="border-0">
Appliance
</th>
<th class="border-0">
Number
</th>
<th class="border-0">
Watts (each)
</th>
<th class="border-0">
Usage Time (Hrs)
</th>

<th class="border-0">
Emission (CO2e)
</th>
</tr>
</thead>
<tbody class="border-0">
<tr>
<td class="border-0">
{{ consumption.energy_source }}
</td>
<td class="border-0">
{{ consumption.appliance }}
</td>
<td class="border-0">
{{ consumption.number_of_appliances }}
</td>
<td class="border-0">
{{ consumption.consumption }}
</td>
<td class="border-0">
{{ consumption.usage_time }}
</td>
<td class="border-0">
{{ consumption.carbon_emission}} Kg
</td>
</tr>



<tr>
<th class="border-0 table-light" colspan="2">
Weekly
</th>
<td class="border-0 table-light"></td>
<td class="border-0">
{{ weekly.consume}}
</td>
<td class="border-0">
{{ weekly.usage}}
</td>
<td class="border-0">
{{ weekly.emissions}} Kg
</td>
</tr>

<tr>
<th class="border-0 table-light" colspan="2">
Monthly
</th>
<td class="border-0 table-light"></td>
<td class="border-0">
{{ monthly.consume}}
</td>
<td class="border-0">
{{ monthly.usage}}
</td>
<td class="border-0">
{{ monthly.emissions}} Kg
</td>
</tr>

<tr>
<th class="border-0 table-light" colspan="2">
Annually
</th>
<td class="border-0 table-light"></td>
<td class="border-0">
{{ annually.consume}}
</td>
<td class="border-0">
{{ annually.usage}}
</td>
<td class="border-0">
{{ annually.emissions}} Kg
</td>
</tr>


</tbody>
</table>








</el-tab-pane>
<el-tab-pane label="Recommendations" name="second">







</el-tab-pane>
</el-tabs>


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
AppLayout
},
props:{
title:{},
response:[],
},
data(){return{
activeName: 'first',
subtitle:'Save energy, save money, and protect the planet by switching off what you don’t need!',
//energy consumption
consumption:this.response.consumption,
weekly:this.response.weekly,
monthly:this.response.monthly,
annually:this.response.annually,



}}
}
</script>