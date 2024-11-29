<template>
<app-layout :title="response.data.name+' Emission Target'" :subtitle="subtitle">
<template #action>
<small>
Created at: {{ row.created_at }}
</small>
</template>


<div class="container">
<div class="row">
<div class="col-12 col-md-10 offset-lg-1">
<div class="card">
<div class="card-inner">
<h6>
From: {{ row.from_date  }} <span class="ml-5">To: {{ row.to_date }}</span>
</h6>
<div class="mt-3">
<el-progress :percentage="50"></el-progress>
</div>
<p>
Reducing emission  from {{ row.name }} by {{ row.emission_percentage }}%
</p>


<div>


    <table class="table mt-4">
        <thead class="border-0 table-light">
          <tr class="border-0">
            <th scope="col" class="border-0">#</th>
            <th scope="col" class="border-0">First</th>
            <th scope="col" class="border-0">Last</th>
            <th scope="col" class="border-0">Handle</th>
          </tr>
        </thead>
        <tbody class="border-0">
          <tr class="border-0" v-for="(e,key) in emission" :key="key">
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
</div>
</div>
</div>






</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue'
export default {
components:{AppLayout},
props:{response:[]},
data(){return{
subtitle:'Adopt emission reducing strategies.',
row:this.response.data,
}},



computed:{
emission(){
return this.row.user_emissions;
}




},





}
</script>