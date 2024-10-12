<template>
<app-layout>

<div class="container">
<div class="row">
<div class="col-12 col-md-8">
<h4>
Search
</h4>
</div>
<div class="col-12 col-md-4">
<form @submit.prevent="submit">
  <el-input
  placeholder="Search for anything...."
  prefix-icon="el-icon-search"
  v-model="form.search">
</el-input>
</form>
</div>
</div>

<div class="row mt-3">
<div class="col-12 m-0 p-0">
  <div class="card card-bordered mb-2 h-100" style="min-height:600px;">
    <div class="card-inner">
        <h4 class="card-subtitle mb-2">Card subtitle</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
  components: { AppLayout },
data(){return{
form:this.$inertia.form({
search:'',
}),



}},

methods:{
submit(){
alert();
}




}



}
</script>