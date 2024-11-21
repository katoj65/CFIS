<template>
<app-layout :title="title" :subtitle="subtitle">
<template #action>
<el-dropdown :hide-on-click="false">
<span class="el-dropdown-link btn bg-white">
Options<i class="el-icon-arrow-down el-icon--right"></i>
</span>
<el-dropdown-menu slot="dropdown">
<el-dropdown-item>
<Inertia-link class="text-dark" href="">Edit</Inertia-link>
</el-dropdown-item>
<el-dropdown-item>
<a class="text-dark" @click="destroy" href="#">
Delete
</a>
</el-dropdown-item>
</el-dropdown-menu>
</el-dropdown>
</template>
<div class="container">
<div class="row">
<div class="col-12">



<div class="card p-2">
<div class="card-inner">
<div class="card-title-group align-start mb-3">
<div class="card-title">
<h6 class="title">Energy Consumption Summary</h6>
</div>
<div class="card-tools mt-n1 mr-n1">

<button class="btn btn-light text-muted" style="font-size:15px;" @click="createPortifolio">
<i class="bi bi-plus-circle" v-if="response.consumption.portifolio=='false'"></i>
<i class="bi bi-x-circle" style="color:red;" v-else></i>
 Portifolio
</button>


</div>
</div>



<div class="" style="overflow: auto;">

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
Watts (Each)
</th>
<th class="border-0">
Usage Time (Hours)
</th>

<th class="border-0">
Emission (CO2e)
</th>
</tr>
</thead>
<tbody class="border-0">
<tr>
<td class="border-0">
{{ consumption.type }}
</td>
<td class="border-0">
{{ consumption.emitter }}
</td>
<td class="border-0">
{{ consumption.number_of_emitters }}
</td>
<td class="border-0">
{{ consumption.consumption_rate }}
</td>
<td class="border-0">
{{ consumption.usage_time }}
</td>
<td class="border-0">
{{ consumption.carbon_emission}} Kg
</td>
</tr>



<tr>
<th class="border-0">
Weekly
</th>
<th class="border-0"></th>
<td class="border-0"></td>
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
<th class="border-0">
Monthly
</th>
<th class="border-0"></th>
<td class="border-0"></td>
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
<th class="border-0">
Annually
</th>
<th class="border-0"></th>
<td class="border-0"></td>
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




<div class="mt-5">
<h6>Recommendations</h6>




</div>






</el-tab-pane>
<el-tab-pane label="Recommendations" name="second">







</el-tab-pane>
</el-tabs>


</div>




</div>
</div>

</div>
</div>
</div>
</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
// import EmissionSummaryChart from '../../charts/EmissionSummaryChart.vue';
export default {
components:{
AppLayout,
// EmissionSummaryChart
},
props:{
title:{},
response:[],
},
data(){return{
activeName: 'first',
subtitle:'Save energy, save money, and protect the planet by switching off what you don’t need!',
//energy consumption
weekly:this.response.weekly,
monthly:this.response.monthly,
annually:this.response.annually,

//form
form:this.$inertia.form({
id:this.response.consumption.id,
}),

}},

methods:{
destroy(){
this.form.delete(route('destroy.hydropower'),{
onSuccess:()=>{
this.$notify({
title:'Successful',
message:this.$page.props.flash.success,
position:'bottom-right',
status:'success'
});
}
});
},

createPortifolio(){
this.form.put(route('portifolio.create'),{
onSuccess:()=>{
this.$notify({
title:'Successful',
message:this.$page.props.flash.success,
status:'success',
position:'bottom-right'

});
}

});
}
},


computed:{
consumption(){
return this.response.consumption;
}



}




}
</script>
<style scoped>
table tr td{text-align:center;font-size:15px;}
table tr th{text-align:center;font-size:15px;}
</style>