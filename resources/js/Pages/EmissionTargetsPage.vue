<template>
<app-layout :title="response.data.title" :subtitle="subtitle">
<template #action>
<div>
<Inertia-link class="btn btn-secondary" :href="route('emission.target_create')" style="font-size:14px;">
Add Goal
</Inertia-link>
</div>
</template>
<div class="container p-0">





<div class="row">
<div class="col-12">
<div class="card">
<div class="card-inner">
<h6>
Emission Reduction Target
</h6>
</div>
<div class="card-inner">

<table class="table">
<thead class="border-0">
<tr class="border-0">
<th scope="col" class="border-0">Timeline</th>
<th scope="col" class="border-0">Target (CO2e) </th>
<th scope="col" class="border-0">Emission (CO2e) </th>
<th scope="col" class="border-0">Progress</th>
</tr>
</thead>
<tbody class="border-0">
<tr v-for="(t,key) in target" :key="key">
<td class="border-0" style="width:250px;">
<Inertia-link :href="route('emission.target_show',{id:t.id})">
<el-tag type="success" effect="dark">{{ t.from_date}}</el-tag>
<el-tag effect="dark"> {{ t.to_date  }}</el-tag>
</Inertia-link>
</td>
<td class="border-0">
{{ t.benchmark_percentage }} Kg
</td>
<td class="border-0">
{{ t.current_emission }} Kg
</td>
<td class="border-0">
<small style="text-transform: capitalize;">
{{ t.emission_activity }}
</small>
<progress-bar :percentage="t.current_percentage"></progress-bar>
</td>
</tr>
</tbody>
</table>












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
components:{
AppLayout,
ProgressBar

},
props:{
response:[],
},

data(){return{
subtitle:'Take bold steps to meet emission targets and protect our planet.',
target:this.response.data.target,






}}
}
</script>