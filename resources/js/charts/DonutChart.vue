<template>
<GChart :type="type" :data="data" :options="options" />
</template>
<script>
import { GChart } from 'vue-google-charts/legacy';
export default {
components:{
        GChart
},
props:{
data:[],
title:{}
},
data(){
return{
type:'PieChart',
options: {
title:this.title,
pieHole: 0.1,

width:400,
height: 400,
}



}}
}
</script>