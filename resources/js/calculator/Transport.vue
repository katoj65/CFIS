<template>

<form @submit.prevent="submit">
<div class="row">

<div class="col-12 col-md-7">
<div class="form-group">
<label class="form-label" for="default-01">Vehicle Type: <error-inline :error="errors.type"></error-inline></label>
<div class="form-control-wrap">
<el-select  clearable placeholder="Select Type of Vehicle" class="form-control" v-model="form.type">
<el-option v-for="(v,key) in vehicle" :key="key" :value="v.category">
{{ v.category }}
</el-option>
</el-select>
</div>
</div>
</div>
<div class="col-12 col-md-5">
<div class="form-group">
<label class="form-label" for="default-01">Number of Vehicles: <error-inline :error="errors.count"></error-inline> </label>
<div class="form-control-wrap">
<el-input-number  @change="handleChange" :min="1" :max="10000" class="form-control" v-model="num"></el-input-number>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-7">
<div class="form-group">
<label class="form-label" for="default-01">Distance Traveled:
<error-inline :error="errors.distance"></error-inline>
</label>
<div class="form-control-wrap">
<el-select  clearable placeholder="Select the Distance Traveled" class="form-control" v-model="form.distance">
<el-option v-for="(d,key) in distance" :key="key" :value="d.value">
{{ d.from==0?d.to:d.from+' - '+d.to }} KM
</el-option>
</el-select>
</div>
</div>
</div>
<div class="col-12 col-md-5">
<div class="form-group">
<label class="form-label" for="default-01">Number of Time Used Weekly:<error-inline :error="errors.usage"></error-inline></label>
<div class="form-control-wrap">

<el-input-number  @change="handleChangeInterval" :min="1" :max="10000" class="form-control" v-model="interval"></el-input-number>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="form-group mt-4">
<submit-button :title="'Save'" :isLoading="isLoading"></submit-button>
</div>
</div>
</div>
</form>


</template>
<script>
import SubmitButton from '../components/SubmitButton.vue';
import ErrorInline from '../components/ErrorInline.vue';

export default {
components:{
SubmitButton,
ErrorInline
},




data(){return{
isLoading:false,

num:1,
interval:1,

form:this.$inertia.form({
type:'',
count:1,
usage:1,
distance:'',
fuel_type:this.$page.props.response.fuel_type,
}),
//
response:this.$page.props.response,
distance:this.$page.props.response.distance,
vehicle:this.$page.props.response.vehicle,
usage:this.$page.props.response.usage,

}},

methods:{
handleChange(value) {
this.form.count=value;
},
handleChangeInterval(value) {
this.form.usage=value;
},

submit(){
this.isLoading=true;
this.form.post(route('post.transport'),{
onFinish:()=>{
this.isLoading=false;
},
onSuccess:()=>{
this.$notify({
title:'Successful',
message:this.$page.props.flash.success,
position:'bottom-left',
type:'success',
position:'bottom-right'

});
}
});



}






},



computed:{
appliance(){
return null;
},
energySource(){
return this.$page.props.response.source;
},
energy_consumption(){
return null;
},
errors(){
return this.form.errors;
}



}








}
</script>






<style scoped>
.form-label{
font-size:14px;

}
h6{
margin:0;
width:100%;
height:100%;
}
.form-group{margin-bottom:10px}
.form-control{
border:none;
padding:0;
margin:0;
}
</style>