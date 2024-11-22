<template>
<app-layout :title="title" :subtitle="subtitle">
<user-layout>
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div class="card p-2">
<div class="card-body">
<div class="card-title">
<h6>
Fill in the vehicle details
</h6>
</div>
</div>


<div class="card-body" style="min-height:200px;">
<div class="col-12">









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
response:[],
},


data(){return{
subtitle:'Calculate emissions by converting activity data to CO₂ with standardised emission factors.',
//
form:this.$inertia.form({
select_fuel:'',
}),



}},

computed:{
source(){
return this.response.fuel;
},
},

methods:{
loadform(){
this.form.post(route('user.form_transport'));
}
}


}
</script>