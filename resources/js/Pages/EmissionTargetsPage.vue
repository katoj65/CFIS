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


<div class="col-12">
{{ response.data }}


<div class="card">
<div class="card-inner">
<h5>
Heading
</h5>
</div>
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







}}
}
</script>