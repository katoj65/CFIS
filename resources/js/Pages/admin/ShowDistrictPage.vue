<template>
<app-layout :title="district.title+' District'" :subtitle="district.subtitle+' Region'">
<template #action v-if="district.id!=null">
    <el-dropdown>
        <el-button type="info">
          Options
          <i class="el-icon-arrow-down el-icon--right"></i>
        </el-button>
        <el-dropdown-menu slot="dropdown">
          <el-dropdown-item>
        <Inertia-link class="text-muted" :href="route('district.edit',{id:district.id})">Edit District</Inertia-link>
        </el-dropdown-item>
          <el-dropdown-item>Delete</el-dropdown-item>
          <!-- <el-dropdown-item>Region</el-dropdown-item> -->
          <!-- <el-dropdown-item>Subcounty</el-dropdown-item>
          <el-dropdown-item>Parish</el-dropdown-item>
          <el-dropdown-item>Village</el-dropdown-item> -->
        </el-dropdown-menu>
      </el-dropdown>
</template>

<section>
<div class="container">
<div class="row">

<div class="col-12 col-md-8 offset-lg-2">
<div class="card p-2">
<p>Upcoming</p>

</div>
</div>


</div>
</div>

</section>

</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
export default {
components:{
AppLayout,

},
props:{
response:[],
},

data(){return{
//title:this.response.district!=''?this.response.district.title:'No district found',
//subtitle:this.response.district!=''?this.response.district.subtitle:'District has not been added yet.',

}},

computed:{
district(){
return {
id:this.response.district!=''?this.response.district.id:null,
title:this.response.district!=''?this.response.district.title:'No district found',
subtitle:this.response.district!=''?this.response.district.subtitle:'District has not been added yet.',
};
}






}






}
</script>