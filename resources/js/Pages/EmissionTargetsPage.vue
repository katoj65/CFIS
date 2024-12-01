<template>
<app-layout :title="response.data.title" :subtitle="subtitle">
<template #action>
<div>
<Inertia-link class="btn btn-secondary" :href="route('emission.target_create')">
Add Goal
</Inertia-link>
</div>
</template>

<div class="container p-0">
<div class="row">

<!-- {{ response }} -->

<div class="col-12 col-md-10 offset-lg-1">
<div class="card">
<div class="card-inner">
<h6>
Emission Reduction Target
</h6>
</div>
<div class="card-inner">
<div class="block">
<el-timeline>
<el-timeline-item :timestamp="t.from_date+' - '+t.to_date" placement="top" v-for="(t,key) in target" :key="key">
<el-card shadow="never" class="">
<h6>
{{ t.emission_activity }} emission reduction {{ t.emission_percentage }}%
</h6>
<div>
<el-progress :percentage="t.current_percentage"></el-progress>
</div>
<p class="py-3">Carbon Emission: {{ t.current_emission }} Kg CO2e <small style="float:right;">
<Inertia-link :href="route('emission.target_show',{id:t.id})" class="text-muted">View more</Inertia-link></small> </p>
</el-card>
</el-timeline-item>
</el-timeline>
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
export default {
components:{
AppLayout,

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