<template>
<app-layout :title="title" :subtitle="subtitle">
<section>
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<form @submit.prevent="submit">
<div class="card p-3" v-if="article!=''">
<div class="card-header mt-2 bg-white border-0">
<div class="card-title">
<h6 class="text-muted">
Edit district information
</h6>
</div>
</div>


<div class="card-body">

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
<option :value="article.region_id">{{ form.region }} </option>
<option :value="r.id" v-for="(r,key) in formatRegion" :key="key">
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
<div v-else>
    <el-skeleton :rows="6" animated />
    <h5 class="text-center py-3"> No District Information</h5>
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
subtitle:'Update district information in the CFI data database',
isLoading:false,
region:this.response.region,
article:this.response.district,
form:this.$inertia.form({
name:'',
region_id:'',
id:'',
region:'',
}),



}},

methods:{
submit(){
this.isLoading=true;
this.form.put(route('district.update',{id:this.form.id}),{
onSuccess:()=>{
// this.form.reset();
this.$notify({
title:this.$page.props.flash.success!=null?'Successful':'Warning',
message:this.$page.props.flash.success!=null?this.$page.props.flash.success:this.$page.props.flash.warning,
position:'bottom-right'
});

},
onFinish:()=>{
this.isLoading=false;
}
})
},

select(event){
this.form.region_id=event.target.value;
},


//form data
formData(){
let row=this.response.district;
this.form.name=row.district;
this.form.region_id=row.region_id;
this.form.id=row.id;
this.form.region=row.region;
}


},

mounted(){
this.formData();
},


computed:{
formatRegion(){
let row=this.response.region;
let items=[];
row.forEach(element => {
if(element.id!=this.form.region_id){
items.push(element);
}
});
return items;
}



}


}
</script>