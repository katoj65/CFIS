<template>
<div>

<!-- {{ $page.props.system.token }} -->
{{ data }}
</div>
</template>
<script>
import axios from 'axios';
export default {
props:{
from: String,
to: String,
name: String,
},
data(){return{
data:[]
}},
async mounted(){
try{
const response = await axios.get(this.$page.props.system.url+'api/charts/emission-target',{
headers:{
Authorization: 'Bearer'+this.$page.props.system.token,
}
});
this.data=response;
}catch(error){
console.log(error);
}
}
}
</script>