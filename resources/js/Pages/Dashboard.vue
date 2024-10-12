<template>
<app-layout>
<dashboard-switch>
</dashboard-switch>
</app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';
import DashboardSwitch from '../components/DashboardSwitch.vue';
export default {
components: {
AppLayout,
DashboardSwitch,


},
props:{
gas_emission:[]
},

data(){return{
gases:[
{name:'Carbon Dioxide',anount:'16,956.63',sub_title:'CO2',measurement:'M'},
{name:'Methane',anount:'12,954.60',sub_title:'CH4',measurement:'M'},
{name:'Nitrous Oxide',anount:'10,000.78',sub_title:'N2O',measurement:'M'},
{name:'Hydrofluorocarbon',anount:'60,954.60',sub_title:'HFC',measurement:'M'}


],





}},





    }
</script>
<style scoped>
.card{
border:none;
}
</style>