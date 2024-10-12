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
{name:'Carbon Emissions',icon:'',url:'/emissions',
subMenu:[
{name:'Agriculture',icon:'',url:'/emissions/agriculture'},
{name:'Energy',icon:'',url:'/emissions/energy'},
{name:'Industries',icon:'',url:'/emissions/industries'},
{name:'Transport',icon:'',url:'/emissions/transport'},
{name:'Land Use',icon:'',url:'/emissions/land-use'},
{name:'Wastes',icon:'',url:'/emissions/wastes'},
{name:'Public Services',icon:'',url:'/emissions/public-services'},
{name:'Buildings',icon:'',url:'/emissions/buildings'}
]
},

{name:'Carbon Offet',icon:'',url:'carbon-offset'},
{name:'Carbon Markets',icon:'',url:'carbon-markets'},

],





}},

computed:{
routeMenu(){
const menu=this.$page.props;
return null;
}


}



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