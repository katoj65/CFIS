<template>
<div class="card h-100 p-2">
<div class="card-inner">
<div class="card-head">
<h6 class="card-title">Calaculate your energy consumption</h6>

</div>
<p class="card-sub-title">
Calculate your energy usage
</p>






<div>


</div>











</div>
</div>
</template>
<script>

export default {
props:{
source:[],

},
data(){return{
//
def:'lighting',
emission_source:'',
//



//
form:this.$inertia.form({
lightSource:'',
lightHours:'',
lightNum:'',
cookSource:'',
cookHours:'',
cookItem:'',

})

}},


methods:{
select_source(param){
this.def=[];
this.def=param;
const item=this.def;
const data=this.source
var emission=[];
data.forEach(element => {
if(element.usage===item){
emission.push(element);
}
});
console.log(emission);
this.emission_source=emission;
}

},

mounted(){
this.select_source('lighting');
}





}
</script>
<style scoped>
.form-label{
font-size:16px;
font-weight:bold;
}
h6{
margin:0;
width:100%;
height:100%;
}
</style>