<template>
    <app-layout :title="title" :subtitle="subtitle">
    <user-layout>
    <div class="row">
    <div class="col-12 col-md-8 offset-lg-2">
    <div class="card p-2">
    <div class="card-body">
    <div class="card-title">
    <h6>
    Select type of fuel for your vehicle.
    </h6>
    </div>
    </div>


    <div class="card-body" style="min-height:200px;">
    <div class="col-12">
    <div class="form-group">
    <label class="form-label" for="default-01">
      Fuel Type:
    </label>
    <div class="form-control-wrap">
    <el-select @change="loadform"    clearable placeholder="Fuel Type" class="form-control border-0" v-model="form.select_fuel">
    <el-option v-for="(f,key) in source" :key="key" :value="f.fuel_type">
    {{ f.fuel_type }}
    </el-option>
    </el-select>
    </div>
    </div>

    <div class="pl-3 pr-3">

    <div v-if="form.select_fuel==''" class="text-center text-muted p-5">
    Select type of fuel for the vehicle.
    </div>
    </div>
    </div>

    </div>
    </div>

    </div>
    </div>
    </user-layout>
    </app-layout>
    </template>
    <script>

    import AppLayout from '../../Layouts/AppLayout.vue';
    import UserLayout from '../../calculator/UserLayout.vue';

    export default {
    components:{
    AppLayout,
    UserLayout,


    },

    props:{
    title:{},
    response:[],
    },


    data(){return{
    subtitle:'Calculate emissions by converting activity data to CO₂ with standardised emission factors.',
    //
    form:this.$inertia.form({
    select_fuel:'',
    }),



    }},

    computed:{
    source(){
    return this.response.fuel;
    },
    },

    methods:{
    loadform(){
    this.form.post(route('user.form_transport'));
    }
    }


    }
    </script>