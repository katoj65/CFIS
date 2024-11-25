<template>
<div>

<form @submit.prevent="submit">



<div class="form-group">
<label class="form-label" for="address">Business Name: <error-inline :error="form.errors.name"></error-inline></label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="address" placeholder="Enter your business name" v-model="form.name" style="text-transform:capitalize;">
</div>
</div>




<div class="form-group">
<label class="form-label" for="address">Business Category: <error-inline :error="form.errors.business_category"></error-inline></label>
<div class="form-control-wrap">
<select class="form-control" @change="select_gender($event)">
<option value="">--Select--</option>
<option value="male" v-for="(c,key) in category" :key="key">
{{ c.name }}
</option>

</select>
</div>
</div>




<div class="form-group">
<label class="form-label" for="full-name">Type of Services: <error-inline :error="form.errors.business_type"></error-inline></label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="full-name" v-model="form.business_type" placeholder="Enter the type of services">
</div>
</div>



<div class="form-group">
<label class="form-label" for="address">Address: <error-inline :error="form.errors.address"></error-inline></label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="address" placeholder="Enter your address" v-model="form.address">
</div>
</div>


<div class="form-group">
<label class="form-label" for="phone-no">Phone Number: <error-inline :error="form.errors.tel"></error-inline></label>
<div class="form-control-wrap">
<input type="number" class="form-control" id="phone-no" placeholder="Enter your phone number" v-model="form.tel">
</div>
</div>




<div class="form-group">
<label class="form-label" for="prof">Business Email: <error-inline :error="form.errors.email"></error-inline></label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="prof" placeholder="Enter business email" v-model="form.email">
</div>
</div>


<div class="form-group">
<label class="form-label" for="job">Year of Founding: <error-inline :error="form.errors.founded_at"></error-inline></label>
<div class="form-control-wrap">
<input type="year" class="form-control" id="job" placeholder="Enter the year of founding" v-model="form.founded_at">
</div>
</div>


<div class="form-group">
<label class="form-label" for="job">Country of Origin: <error-inline :error="form.errors.origin"></error-inline></label>
<div class="form-control-wrap">
<input type="text" class="form-control" id="job" placeholder="Enter the business orign" v-model="form.origin">
</div>
</div>

<div class="form-group pt-3" style="width:200px;">
<submit-button :isLoading="isLoading" :title="'Save'"/>
</div>
</form>



</div>
</template>
<script>
import ErrorInline from '../components/ErrorInline.vue';
import SubmitButton from '../components/SubmitButton.vue';
export default {
components:{
SubmitButton,
ErrorInline,
},
props:{
category:{},

},
data(){
return{
isLoading:false,
form:this.$inertia.form({
name:this.$page.props.user.firstname+' '+this.$page.props.user.lastname,
business_category:'',
business_type:'',
address:'',
tel:'',
email:'',
founded_at:'',
origin:''
}),






}
},


methods:{
submit(){
this.isLoading=true;
this.form.post(route('profile.business_create'),{
onSuccess:()=>{
this.form.reset();
this.$notify({
title:'Successful',
message:this.$page.props.flash.success,
type:'success',
position:'bottom-right'

});

},
onFinish:()=>{
this.isLoading=false;
}

});

},


select_gender(event){
this.form.business_category=event.target.value;
},



},

computed:{
user(){
return this.$page.props.user;
}


}






}
</script>
<style scoped>
div{
text-align: left;
}
</style>