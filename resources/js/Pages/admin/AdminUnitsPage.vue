<template>
<app-layout :title="title" :subtitle="subtitle">
<template #action>
    <el-dropdown>
        <el-button type="info">
          Create New Unit
          <i class="el-icon-arrow-down el-icon--right"></i>
        </el-button>
        <el-dropdown-menu slot="dropdown">
          <el-dropdown-item>
        <Inertia-link class="text-muted" :href="route('districts.create')">Add District</Inertia-link>
        </el-dropdown-item>
          <el-dropdown-item>Region</el-dropdown-item>
          <el-dropdown-item>County</el-dropdown-item>
          <el-dropdown-item>Subcounty</el-dropdown-item>
          <el-dropdown-item>Parish</el-dropdown-item>
          <el-dropdown-item>Village</el-dropdown-item>
        </el-dropdown-menu>
      </el-dropdown>
</template>


<section class="card">
<div class="container">
<div class="row">
<div class="col-12">

    <table class="table table-sm">
        <thead class="border-0">
          <tr class="border-0">
            <th scope="col" class="border-0">#</th>
            <th scope="col" class="border-0">First</th>
            <th scope="col" class="border-0">Last</th>
            <th scope="col" class="border-0">Handle</th>
          </tr>
        </thead>
        <tbody class="border-0" for>
          <tr v-for="(n,key) in 20" :key="key">
            <th scope="row" class="border-0">1</th>
            <td class="border-0">Mark</td>
            <td class="border-0">Otto</td>
            <td class="border-0">@mdo</td>
          </tr>


        </tbody>
      </table>



</div>
</div>
</div>
</section>


</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
export default {
    components:{AppLayout},
    props:{
    title:{},
    response:[]
    },
    data(){return{
        subtitle:'Region, District, County, Subcounty, Parish and Village.',
    }}
}
</script>
<style scoped>
table tr th, table tr td{padding:10px;}
.dropdown ul li{
padding-left:10px;
padding-right:10px;
}
</style>