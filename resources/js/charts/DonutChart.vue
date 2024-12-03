<template>
<GChart :type="type" :data="data" :options="options" />
</template>
<script>
import { GChart } from 'vue-google-charts/legacy';
export default {
components:{
        GChart
},
data(){
return{
type:'PieChart',
data:[
['Task', 'Hours per Day'],
['Work', 11],
['Eat', 2],
['Commute', 2],
['Watch TV', 2],
['Sleep', 7],
]
 ,
options: {
title: 'My Daily Activities',
pieHole: 0.4,

width: 800,
height: 600,
}



}}
}
</script>