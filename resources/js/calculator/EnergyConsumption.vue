<template>
    <div class="card h-100">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Energy Consumption</h5>

            </div>
            <p class="card-sub-title">
                Calculate your energy usage
            </p>






<div>
<b-tabs content-class="mt-3" fill active>
<b-tab active>
<template #title>
<h6 @click="select_source('lighting')">Lighting</h6>
</template>
<form>


<div class="form-group pb-4 ">
<label class="form-label" for="cf-full-name">
</label>
<div class="row">
<div class="col-6">
<select class="form-control" id="cf-full-name">
<option value="default_option">--Select Source--</option>
<option value="option_select_name" v-for="(l,key) in emission_source" :key="key">
{{ l.name }}
</option>
</select>
</div>
<div class="col-6">
<input type="text" class="form-control" id="cf-full-name1" placeholder="Hours used">
</div>
<div class="col-12 mt-4">
<input type="text" class="form-control" id="cf-full-name2" placeholder="Number of lights">
</div>
</div>
</div>





<div class="form-group">
<button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
</div>
</form>
</b-tab>





<b-tab>
<template #title>
<h6 @click="select_source('cooking')">Cooking</h6>
</template>
<form>


<div class="form-group pb-4 ">
<label class="form-label" for="cf-full-name">

</label>
<div class="row">
<div class="col-6">
<select class="form-control" id="cf-full-name">
<option value="default_option">--Select Source--</option>
<option value="option_select_name" v-for="(l,key) in emission_source" :key="key">
{{ l.name }}
</option>

</select>
</div>
<div class="col-6">
<input type="text" class="form-control" id="cf-full-name1" placeholder="Hours used">
</div>
<div class="col-12 mt-4">
<input type="text" class="form-control" id="cf-full-name2" placeholder="Number of lights">
</div>
</div>
</div>





<div class="form-group">
<button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
</div>



</form>
</b-tab>


<b-tab>
<template #title>
<h6 @click="select_source('freezing')">Freezing</h6>
</template>
<form>

<div class="form-group pb-4 ">
<label class="form-label" for="cf-full-name">

</label>
<div class="row">
<div class="col-6">
<select class="form-control" id="cf-full-name">
<option value="default_option">--Select Source--</option>
<option value="option_select_name" v-for="(l,key) in emission_source" :key="key">
{{ l.name }}
</option>

</select>
</div>
<div class="col-6">
<input type="text" class="form-control" id="cf-full-name1" placeholder="Hours used">
</div>
<div class="col-12 mt-4">
<input type="text" class="form-control" id="cf-full-name2" placeholder="Number of lights">
</div>
</div>
</div>





<div class="form-group">
<button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
</div>



</form>
</b-tab>



<b-tab>
<template #title>
<h6 @click="select_source('heating')">Heating</h6>
</template>
<form>

<div class="form-group pb-4 ">
<label class="form-label" for="cf-full-name">

</label>
<div class="row">
<div class="col-6">
    <select class="form-control" id="cf-full-name">
        <option value="default_option">--Select Source--</option>
        <option value="option_select_name" v-for="(l,key) in emission_source" :key="key">
            {{ l.name }}
        </option>

    </select>
</div>
<div class="col-6">
<input type="text" class="form-control" id="cf-full-name1" placeholder="Hours used">
</div>
<div class="col-12 mt-4">
    <input type="text" class="form-control" id="cf-full-name2" placeholder="Number of lights">
    </div>
</div>
</div>





<div class="form-group">
<button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
</div>



</form>
</b-tab>

</b-tabs>
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