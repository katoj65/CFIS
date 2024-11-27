<template>
<app-layout :title="title" :subtitle="subtitle">
<template #action>
<div>
<Inertia-link class="btn btn-secondary" :href="route('emission.target_create')">
Add Goal
</Inertia-link>
</div>
</template>

<div class="container p-0">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<div class="card">
<div class="card-inner">
<h6>
Set your emission target
</h6>
<form class="mt-3" @submit.prevent="submit">


<div class="row">
<div class="col-6">
<div class="form-group">
<label class="form-label" for="default-01">Start Date:<error-inline :error="form.errors.from_date"></error-inline>  </label>
<div class="form-control-wrap">
<el-input placeholder="Start date" type="date" v-model="form.from_date"></el-input>
</div>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label class="form-label" for="default-01">End Date: <error-inline :error="form.errors.to_date"></error-inline></label>
<div class="form-control-wrap">
<el-input placeholder="End date" type="date" v-model="form.to_date"></el-input>
</div>
</div>
</div>
</div>





<div class="row mt-3">
<div class="col-6">
<div class="form-group">
<label class="form-label" for="default-01">Emission Activity:<error-inline :error="form.errors.emission_activity"></error-inline> </label>
<div class="form-control-wrap">
<el-select v-model="form.emission_activity" placeholder="Select Emission Activity" style="width:100%;">
<el-option v-for="(e,key) in response.data" :key="key" :value="e.name">
{{ e.name }}
</el-option>
</el-select>
</div>
</div>
</div>
<div class="col-6">
<div class="form-group">
<label class="form-label" for="default-01">Emission Reeduction (%): <error-inline :error="form.errors.percentage"></error-inline></label>
<div class="form-control-wrap">
<el-input placeholder="Enter Your Emission Reduction Goal" type="number" v-model="form.percentage"></el-input>
</div>
</div>
</div>
</div>


<div class="row mt-4">
<div class="col-4">
<div class="form-group">
<SubmitButton :title="'Submit'" :isLoading="isLoading"/>
</div>
</div>
</div>



</form>
</div>
</div>
</div>
</div>
</div>

</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue';
import SubmitButton from '../components/SubmitButton.vue';
import ErrorInline from '../components/ErrorInline.vue';
export default {
components:{
AppLayout,
SubmitButton,
ErrorInline

},
props:{
response:[],
},
data(){return{
isLoading:false,
title:'Emission Targets',
subtitle:'Take bold steps to meet emission targets and protect our planet.',
form:this.$inertia.form({
from_date:'',
to_date:'',
percentage:'',
emission_activity:'',
}),




}},

methods:{
submit(){
this.isLoading=true;
this.form.post(route('emission.store_target'),{
onSuccess:()=>{
this.form.reset();
this.$notify({
title:'Successful',
message:this.$page.props.flash.success,
position:'bottom-right',
status:'success'
});
},
onFinish:()=>{
this.isLoading=false;
}

});

}





}





}
</script>
<style scoped>
.form-control{
border:none;
}
</style>