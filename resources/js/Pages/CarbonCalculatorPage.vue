<template>
<app-layout>
<div class="row">
<div class="col-12 col-md-3">
</div>
<div class="col-12 col-md-6">

<!-- <energy-consumption v-if="formOption=='energy-consumption'" :source="source"/>
<water-usage v-if="formOption=='water-usage'" :source="source"/>
<transport v-if="formOption=='transport'" :source="source"/>
<waste-management v-if="formOption=='waste-management'" :source="source"/>
<food-diet v-if="formOption=='food-diet'" :source="source"/>
<goods v-if="formOption=='goods'" :source="source"/>
<land-use v-if="formOption=='land-use'" :source="source"/>
<building v-if="formOption=='building'" :source="source"/>
<supply-chain v-if="formOption=='supply-chain'" :source="source"/> -->

<slot/>
</div>
<div class="col-12 col-md-3">
</div>
</div>
</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue';
import EnergyConsumption from '../calculator/EnergyConsumption.vue';
import WaterUsage from '../calculator/WaterUsage.vue';
import Transport from '../calculator/Transport.vue';
import WasteManagement from '../calculator/WasteManagement.vue';
import FoodDiet from '../calculator/FoodDiet.vue';
import Goods from '../calculator/Goods.vue';
import LandUse from '../calculator/LandUse.vue';
import Building from '../calculator/Building.vue';
import SupplyChain from '../calculator/SupplyChain.vue';


export default {
components:{
AppLayout,
EnergyConsumption,
WaterUsage,
Transport,
WasteManagement,
FoodDiet,
Goods,
LandUse,
Building,
SupplyChain,


},
props:{
carbon_footprint_parameter:[],
emission_source:[],
},


computed:{
formOption(){
const url=this.$page.url;
const r=url.split("/");
return r[3];
},

source(){
return this.emission_source;
}



}


}
</script>