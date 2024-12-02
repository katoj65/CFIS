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
<div class="py-3">
<ProgressBar :percentage="row.benchmarks.current_percentage" :width="15"/>
</div>

<div>


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
{{ row.current_target.amount }} Kg
</td>
<th class="border-0" style="width:20px;">
</th>
<td class="border-0">

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
{{ row.previous_target.from_date }}
</td>
<th class="border-0">
-
</th>
<td class="border-0">
{{ row.previous_target.to_date}}
</td>
</tr>

<tr>
<th class="border-0">
CO2e:
</th>
<td class="border-0" colspan="3">
{{ row.previous_target.amount }} Kg
</td>
</tr>
<tr>
<th class="border-0" colspan="3">
Emission Target CO2e:
</th>
<td class="border-0" colspan="3">
{{ row.benchmarks.benchmark_percentage }} Kg
</td>
</tr>

</thead>
</table>




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
export default {
components:{AppLayout, ProgressBar },
props:{response:[]},
data(){return{
subtitle:'Adopt emission reducing strategies.',
row:this.response.data,
}},



computed:{
emission(){
console.log(this.response);
return this.row.user_emissions;
}

},

methods:{
emission_data(){
console.log(this.response);
}
},

mounted(){
this.emission_data();
}





}
</script>