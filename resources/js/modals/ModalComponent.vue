<template>
<div>
<a class="nk-news-item p-1" href="#" @click="modalShow = !modalShow">
<div class="nk-news-icon">
<b-icon icon="calculator" aria-hidden="true" class="icon" style="font-size:25px;color:black;"></b-icon>
</div>
<div class="nk-news-text" style="width:300px;">
<p style="color:black;font-size:15px;">Calculate Carbon Footprint</p>
</div>
</a>

<b-modal v-model="modalShow" hide-footer>
<template #modal-title>
<div style="color:black">
Carbon Calculator
</div>
</template>


<div>
<div class="p-2 pt-0" style="margin-top:-15px;">
<b-list-group flush>
<b-list-group-item button v-for="(i,key) in carbonFootprintParams" :key="key" class="pl-0" style="border:none;">
 <inertia-link :href="route(i.url+'.show')">
   <em class="icon ni ni-forward-ios mr-2"></em> {{ i.name }}
 </inertia-link>
</b-list-group-item>
</b-list-group>
</div>




</div>
</b-modal>
</div>
</template>

<script>
export default {
data() {
return {
modalShow: false,



}},




computed:{
carbonFootprintParams(){
return this.$page.props.system.carbon_footprint_parameters;
}


}





}
</script>
<style scoped>
input{
height:50px;
}
ul{
margin:0;
padding:0;
}
#menu{
padding:10px;
}
#menu ul li{
float:left;
margin-left:0px;
margin-right:20px;
padding-right:0px;
padding-left:0px;
}

a{
color:black;
}

#menu ul li a{
letter-spacing: 0.5px;
width:100%;
display: block;
}
</style>