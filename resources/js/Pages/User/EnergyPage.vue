<template>
<app-layout :title="title" :subtitle="subtitle">
<user-layout>
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<div class="card p-2">
<div class="card-body">
<div class="card-title">
<h6>
Select your energy sources
</h6>
</div>
</div>
<div class="card-body" style="min-height:200px;">


<div class="col-12">
<div class="form-group">
<label class="form-label" for="default-01">Emission Source:</label>
<div class="form-control-wrap">
<el-select @change="loadform"    clearable placeholder="Select Source" class="form-control border-0" v-model="form.select_source">
<el-option v-for="(e,key) in source" :key="key" :value="e.name">
{{ e.name }}
</el-option>
</el-select>
</div>
</div>

<div class="pl-3 pr-3">

<!-- <hydropower-form v-if="select_source=='Hydropower'"/> -->




<div v-if="form.select_source==''" class="text-center text-muted p-5">
Select source of emission to continue.
</div>
</div>
</div>



</div>
</div>


</div>
</div>
</user-layout>
</app-layout>
</template>
<script>

import AppLayout from '../../Layouts/AppLayout.vue';
import UserLayout from '../../calculator/UserLayout.vue';

export default {
components:{
AppLayout,
UserLayout,


},

props:{
title:{},
response:{},
},


data(){return{
subtitle:'Calculate emissions by converting activity data to CO₂ with standardised emission factors.',
//


form:this.$inertia.form({
select_source:'',
}),





}},

computed:{
source(){
return this.response.source;
},
},

methods:{
loadform(){
this.form.post(route('energy.form'));
}
}


}
</script>