<template>
<div>
<ul class="nav nav-tabs">
<li class="nav-item" v-for="(m,key) in menu" :key="key" >
<Inertia-link class="nav-menu" :href="route(m.url)">{{ m.name }} </Inertia-link>
</li>
</ul>
<div class="tab-content">
<slot></slot>
</div>
</div>
</template>
<script>
export default {
data(){return{
menu:[
{name:'Overview',url:'calculator.index'},
{name:'Energy',url:'user.energy_calculator'},
{name:'Transportation',url:'user.transport_page'},
{name:'Diet and Meals',url:'user.energy_calculator'},
{name:'Waste Disposal',url:'user.energy_calculator'},



]











}}





}
</script>

<style scoped>
.nav-menu{
padding:2px;
font-family:Arial, Helvetica, sans-serif;
color:#1A374D;
margin-bottom:20px;
font-weight:bolder;
font-size:15px;

}
.nav-menu:hover{
border-bottom: none;
}
.nav-tabs{
margin-bottom:10px;
}
.nav-item{
margin-bottom:10px;
max-width:200px;

}
</style>