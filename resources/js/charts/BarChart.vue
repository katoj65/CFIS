<template>
<div>
<GChart :type="type" :data="items" :options="options" />

</div>
</template>
<script>
import { GChart } from 'vue-google-charts/legacy';
export default {
components:{
GChart
},
props:{
items:{}
},

data(){return{

type:'BarChart',
options: {
  title: 'Population of Largest U.S. Cities',
  chartArea: { width: '50%' },
  hAxis: {
    title: 'Total Population',
    minValue: 0,
  },
  vAxis: {
    title: 'City',
  },
  width: 800,
  height: 600,
},

}}


}
</script>