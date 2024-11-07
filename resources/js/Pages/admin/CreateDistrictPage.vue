<template>
<app-layout :title="title" :subtitle="subtitle">
<section>
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<form @submit.prevent="submit">
<div class="card">
<div class="card-header mt-2 bg-white border-0">
<div class="card-title">
<h6 class="text-muted">
Fill in the district information
</h6>
</div>
</div>

<div class="card-body p-5">

<div class="form-group">
<label class="form-label" for="name">Name of the district</label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="name" placeholder="Enter district name" v-model="form.name" style="text-transform:capitalize;">
</div>
<error-inline :error="form.errors.name"></error-inline>
</div>


<div class="form-group">
    <label class="form-label" for="region">Region</label>
    <div class="form-control-wrap">
<select  class="form-control" id="region" @change="select($event)">
<option value="">--Select--</option>
<option :value="r.id" v-for="(r,key) in region" :key="key">
    {{ r.name }}
</option>
</select>
    </div>
    <error-inline :error="form.errors.region_id"></error-inline>
    </div>




<div class=" bg-white border-0">
    <div class="form-group" style="width:200px;">
    <submit-button :isLoading="isLoading" :title="'Save'"/>
    </div>
    </div>
</div>

</div>

</form>






</div>
</div>
</div>
</section>
</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
import ErrorInline from '../../components/ErrorInline.vue';
import SubmitButton from '../../components/SubmitButton.vue';
export default {
components:{
AppLayout,
ErrorInline,
SubmitButton
},
props:{
title:{},
response:[],
},

data(){return{
subtitle:'Add district information to CFI data collection',
isLoading:false,
region:this.response.region,
form:this.$inertia.form({
name:'',
region_id:''
}),



}},

methods:{
submit(){
this.isLoading=true;
this.form.post(route('district.store'),{
onSuccess:()=>{
this.form.reset();

},
onFinish:()=>{
this.isLoading=false;
}


})
},
select(event){
this.form.region_id=event.target.value;
}





}







}
</script>