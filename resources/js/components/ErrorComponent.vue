<template>
<div>
<div class="alert alert-danger" v-if="form.hasErrors==true">
<div>
<ul>
<li v-for="(e,key) in errors" :key="key">
{{ e }}
</li>
</ul>
</div>
</div>
</div>
</template>
<script>
export default {
props:{
form:{},
},
computed:{
errors(){
return this.form.errors;
}
}
}
</script>
<style scoped>
ul {margin:0;}
ul li{margin:0;
color:red;
}
.alert-danger{
padding:10px;
margin-bottom:20px;

}
</style>