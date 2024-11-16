<template>
<div class="card h-100 p-2">
<div class="card-inner">
<div class="card-head">
<h6 class="card-title">Calaculate your energy consumption</h6>

</div>
<p class="card-sub-title">
Calculate your energy usage
</p>


<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Source:</label>
<div class="form-control-wrap">
<el-select  clearable placeholder="Select Source" class="form-control">
<el-option>
</el-option>
</el-select>
</div>
</div>
</div>
<div class="col-md-6 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Appliance:</label>
<div class="form-control-wrap">
<el-select  clearable placeholder="Select Appliance" class="form-control">
<el-option>
</el-option>
</el-select>
</div>
</div>
</div>
</div>




<div class="row">
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Number of Appliances:</label>
<div class="form-control-wrap">
<el-input-number  @change="handleChange" :min="1" :max="10000" class="form-control" v-model="num"></el-input-number>
</div>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label class="form-label" for="default-01">Consumption (Watts):</label>
<div class="form-control-wrap">
<el-input placeholder="Enter number of Watts" type="number" class="form-control"></el-input>
</div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label class="form-label" for="default-01">Hours Used in a Day:</label>
<div class="form-control-wrap">

<el-select  clearable placeholder="Select Number of Hours Used" class="form-control">
    <el-option>
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












<div>
</div>
</div>
</div>
</template>
<script>
import SubmitButton from '../components/SubmitButton.vue'
export default {
components:{
SubmitButton
},
props:{},
data(){return{
isLoading:false,
num:1,

form:this.$inertia.form({
source:'',
appliance:'',
number_of_items:'',
consumption:'',
hours:'',



}),





}},

methods:{
handleChange(value) {
console.log(value)
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