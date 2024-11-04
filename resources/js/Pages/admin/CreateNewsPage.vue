<template>
<app-layout :title="'Create News Article'" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary" :href="route('admin.news')">
    News
</Inertia-link>
</template>



<section>
<div class="row">

<div class="col-md-8 col-12 offset-lg-2">


<div class="card p-4">
<div class="card-header bg-white border-0">
<div class="card-title">
<h6>Fill in all fields</h6>
</div>
</div>
<div class="card-body">

<form @submit.prevent="submit">
<div class="form-group">
<div class="form-control-wrap">
<input type="text" class="form-control" id="default-01" placeholder="Title" v-model="form.title">
</div>
<ErrorInline :error="form.errors.title"/>
</div>
<div class="form-group">
<div class="form-control-wrap">
<b-form-file
v-model="form.file"
:state="Boolean(form.file)" placeholder="Choose a file or drop it here..." drop-placeholder="Drop file here..."
  style="border:none;"></b-form-file>
</div>
</div>
<div class="form-group">
<div class="form-control-wrap">
<textarea class="form-control" id="default-01" placeholder="Write content description" style="min-height:200px;" v-model="form.description"></textarea>
</div>
<ErrorInline :error="form.errors.description"/>
</div>
<div class="form-group">
<SubmitButton :title="'Publish Article'" :isLoading="isLoading"></SubmitButton>
</div>
</form>


</div>
</div>





</div>

</div>
</section>











</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
import SubmitButton from '../../components/SubmitButton.vue';
import ErrorInline from '../../components/ErrorInline.vue';


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
subtitle:'Stay Updated with the Latest Environmental Breakthroughs.',
isLoading:false,
status:false,
form:this.$inertia.form({
title:'',
description:'',
file:'',
}),

}},

methods:{

submit(){
this.isLoading=true;
this.form.post(route('news.store'),{

onFinish:()=>{
this.isLoading=false;
},
onSuccess:()=>{
this.form.reset();
this.isLoading=false;

this.$notify({
title: 'Success',
message: 'This is a success message',
type: 'success',
position: 'bottom-right'
});



}







});

}


}


}
</script>