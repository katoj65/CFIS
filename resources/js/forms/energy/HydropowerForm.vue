<template>

<form>
<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Home Appliance:</label>
<div class="form-control-wrap">
<el-select  clearable placeholder="Select Home Appliance" class="form-control" v-model="form.appliance">
<el-option v-for="(a,key) in appliance" :key="key" :value="a.name">
{{ a.name }}
</el-option>
</el-select>
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Number of Appliances:</label>
<div class="form-control-wrap">
<el-input-number  @change="handleChange" :min="1" :max="10000" class="form-control" v-model="num"></el-input-number>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Consumption (Watts):</label>
<div class="form-control-wrap">
<el-input placeholder="Enter number of Watts" type="number" class="form-control" v-model="form.consumption"></el-input>
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Hours Used in a Day:</label>
<div class="form-control-wrap">

<el-select  clearable placeholder="Select Number of Hours Used" class="form-control" v-model="form.hours">
<el-option v-for="(e,key) in energy_consumption" :key="key" :value="e.value">
{{ e.name }}
</el-option>
</el-select>
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
import SubmitButton from '../../components/SubmitButton.vue';
export default {
components:{
SubmitButton
},
props:{
source:{}
},
data(){return{
isLoading:false,
num:1,
form:this.$inertia.form({
source:this.source,
appliance:'',
number_of_items:1,
consumption:'',
hours:'',
}),

//

response:this.$page.props.response,









}},

methods:{
handleChange(value) {
console.log(value);
this.form.number_of_items=value;
}
},



computed:{
appliance(){
return this.$page.props.response.appliance;
},
energySource(){
return this.$page.props.response.source;
},
energy_consumption(){
return this.$page.props.response.consumption;
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