<template>
<app-layout :title="title" :subtitle="subtitle">
<user-layout>
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<div class="card p-4">
<div class="card-body">
<div class="card-title">
<h6>
Fill in your Hydropower Consumption
</h6>
</div>
</div>
<div class="card-body" style="min-height:200px;">
<hydropower-form/>
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
import HydropowerForm from '../../forms/energy/HydropowerForm.vue';

export default {
components:{
AppLayout,
UserLayout,
HydropowerForm,


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