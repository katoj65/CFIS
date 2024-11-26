<template>
<app-layout :title="response.data.title">


Some information



</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue';
export default {
components:{
AppLayout,

},
props:{
response:[],
},
data(){return{
subtitle:'',


}}
}
</script>