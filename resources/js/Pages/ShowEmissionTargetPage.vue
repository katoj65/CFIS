<template>
<app-layout :title="response.data.name+' Emission Target'" :subtitle="subtitle">
<template #action>
<small>
Created at: {{ row.created_at }}
</small>
</template>







<div class="container">
<div class="row">
<div class="col-12 col-md-10 offset-lg-1">
<div class="card">
<div class="card-inner">
<h6>
Reducing emission  from {{ row.name }} by {{ row.emission_percentage }}%
</h6>
<div>

<div class="py-3">
<el-tabs v-model="activeName">
<el-tab-pane label="Overview" name="first">

<div class="row">
<div class="col-12 col-md-6">
<table class="table mt-2">
<thead class="border-0">
<tr>
<th class="border-0" style="width:20px;">
From:
</th>
<td class="border-0" style="width:100px;">
{{ row.from_date }}
</td>
<th class="border-0" style="width:20px;">
-
</th>
<td class="border-0">
{{ row.to_date }}
</td>
</tr>
<tr>
<th class="border-0" style="width:20px;">
CO2e:
</th>
<td class="border-0" style="width:100px;" colspan="3">
{{ row.current_target.emission_sum }} Kg
</td>
<th class="border-0" style="width:20px;">
</th>
<td class="border-0">
</td>
</tr>


<tr>
<th class="border-0" colspan="3">
Emission Target CO2e:
</th>
<td class="border-0" colspan="3">
{{ row.benchmarks.target_sum }} Kg
</td>
</tr>


<tr>
<th class="border-0 table-light" colspan="6">
Benchmark
</th>
</tr>
<tr>
<th class="border-0">
From:
</th>
<td class="border-0">
{{ row.benchmarks.from_date }}
</td>
<th class="border-0">
-
</th>
<td class="border-0">
{{ row.benchmarks.to_date}}
</td>
</tr>

<tr>
<th class="border-0">
CO2e:
</th>
<td class="border-0" colspan="3">
{{ row.benchmarks.previous_sum}} Kg
</td>
</tr>


</thead>
</table>
</div>
<div class="col-12 col-md-6">
<DonutChart :data="chart" :title="'Emission Target '+row.from_date+' | '+row.to_date+''"/>
</div>
</div>

</el-tab-pane>
<el-tab-pane label="Emission Trends" name="second">
<div class="py-3">
<GChart type="BarChart" :data="graph" :options="chartOptions" v-if="isLoading==false" />
</div>
</el-tab-pane>
</el-tabs>
</div>

</div>
</div>
</div>
</div>
</div>
</div>






</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue';
import ProgressBar from '../components/ProgressBar.vue';
import DonutChart from '../charts/DonutChart.vue';
import { GChart } from 'vue-google-charts/legacy';

export default {
components:{AppLayout, ProgressBar,DonutChart,GChart},
props:{response:[]},
data(){return{
subtitle:'Adopt emission reducing strategies.',
activeName: 'first',
row:this.response.data,
graph:[],
isLoading:false,
//chart details
chartOptions:  {
  title: 'Emission Trends',
  chartArea: { width: '70%' },
  hAxis: {
    title: 'Kilograms of carbon dioxide equivalent (kgCO2e) ',
    minValue: 0,
  },
  vAxis: {
    title: 'Dates',
  },
  width:700,
//   height: 600,
}




}},


computed:{
emission(){
return this.row.user_emissions;
},

chart(){
const target=100-this.row.current_target.percentage;
return [
['Emission Target','CO2e'],
['Emission',this.row.current_target.percentage],
['Target',target]

];
},





},


async mounted(){
try{
this.isLoading=true;
await axios.get(this.$page.props.system.url+'api/charts/emission-target/'+this.row.from_date+'/'+this.row.to_date+'/'+this.row.name,{
headers:{
Authorization:'Bearer'+this.$page.props.system.token,
}
}).then(res=>{
if(res.status==200){
this.isLoading=false;
this.graph=res.data.data;
this.graph.unshift(['date','kgCO2e']);

console.log(res);
}
}).catch(e=>{console.log(e)});
}catch(error){
console.log(error);
}
}




}
</script>