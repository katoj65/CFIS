<template>
<app-layout :title="title" :subtitle="subtitle">
<user-layout>
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<energy-consumption/>
</div>
</div>
</user-layout>
</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
import UserLayout from '../../calculator/UserLayout.vue';
import EnergyConsumption from '../../calculator/EnergyConsumption.vue';
export default {
components:{
AppLayout,
UserLayout,
EnergyConsumption
},

props:{
title:{},
response:{},
},


data(){return{
subtitle:'Calculate emissions by converting activity data to CO₂ with standardised emission factors.',
tabPosition: 'left',



}},



}
</script>