<template>
<ul class="nk-menu">

<li class="nk-menu-item" v-for="(m,key) in menu" :key="key">
<a href="html/index.html" class="nk-menu-link">
<span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
<span class="nk-menu-text">
{{ m.name }}
</span>
</a>
</li><!-- .nk-menu-item -->

</ul>

</template>
<script>
export default {
data(){return{
menu:[
{name:'Carbon Footprint',icon:'',url:'carbon-footprint'},
{name:'Carbon Offet',icon:'',url:'carbon-offset'},
{name:'Carbon Markets',icon:'',url:'carbon-markets'},

],





}}
}
</script>
<style scoped>
a{
color:white;
text-decoration: none;
}
.icon{
color:white;
}

</style>