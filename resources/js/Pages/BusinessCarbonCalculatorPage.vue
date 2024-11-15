<template>
    <app-layout :title="title" :subtitle="subtitle">




    <el-tabs :tab-position="tabPosition" style="min-height:200px;">
    <el-tab-pane label="Overview">

    <div class="row">
    <div class="col-12 col-md-10 offset-lg-1">

    <div class="card p-3" style="min-height:500px;">
    <div class="card-inner">
    <h6 class="card-title">Calculate Your Carbon Footprint</h6>
    <p class="card-text">
    In today’s world, every action we take whether it’s commuting, eating, or powering our homes contributes to greenhouse gas emissions that impact the planet. But did you know that understanding your carbon footprint is one of the most empowering steps you can take toward climate action?
    </p>
    <p>
    Calculating your carbon emissions isn’t just about numbers; it’s about understanding your role in the fight against climate change and discovering opportunities to make a difference. Here’s why you should start today:
    </p>

    <el-collapse accordion>
    <el-collapse-item name="1">
    <template slot="title">
    <h6>Awareness is the First Step</h6>
    </template>
    <p>You can’t manage what you don’t measure. Knowing the carbon emissions tied to your lifestyle whether it’s your commute, energy use, or dietary choices—shines a light on areas where you can reduce your environmental impact.</p>

    </el-collapse-item>
    <el-collapse-item name="2">
    <template slot="title">
    <h6>Combatting Climate Change Starts at Home </h6>
    </template>
    <p>
    Climate change may feel like a vast, global issue, but it’s driven by individual choices. By calculating your carbon footprint, you recognize how personal decisions contribute to a collective challenge, allowing you to take responsibility and be part of the solution.
    </p>
    </el-collapse-item>
    <el-collapse-item name="3" slot="title">
    <template>
    <h6>Identify Cost-Effective Opportunities</h6>
    </template>
    <p>
    Many actions that reduce your carbon footprint like cutting energy waste, using efficient appliances, or driving less can also save you money. Measuring your emissions helps you identify where small adjustments can yield financial and environmental benefits.
    </p>

    </el-collapse-item>
    <el-collapse-item name="4">
    <template slot="title">
    <h6> Support Behavior Change</h6>
    </template>
    <p>
    By measuring and sharing your carbon footprint, you advocate for transparency and encourage businesses and governments to do the same. Your demand for greener options drives broader behavior change, fostering sustainable policies and innovations.
    </p>
    </el-collapse-item>
    <el-collapse-item name="5">
    <template slot="title">
    <h6>Track Your Progress </h6>
    </template>
    <p>
    Climate action is a journey. Regularly measuring your carbon footprint helps you set realistic goals, monitor improvements, and celebrate milestones. It also keeps you motivated to keep striving for a more sustainable lifestyle.
    </p>
    </el-collapse-item>

    <el-collapse-item name="6">
    <template slot="title">
    <h6>Strengthen Community Impact </h6>
    </template>
    <p>
    When you calculate your footprint, you’re not acting alone. Your efforts contribute to a growing global community taking action against climate change. Together, individual actions amplify into collective impact, fostering a sense of shared responsibility and accomplishment.
    </p>
    </el-collapse-item>
    <el-collapse-item name="7">
    <template slot="title">
    <h6>Offset What You Can’t Avoid </h6>
    </template>
    <p>
    While reducing emissions is vital, some activities will always produce carbon. Measuring your footprint helps you calculate exactly what you need to offset through credible carbon offset programs, allowing you to achieve net-zero emissions and support global sustainability projects.
    </p>
    </el-collapse-item>
    </el-collapse>


    </div>
    </div>
    </div>
    </div>

    </el-tab-pane>
    <el-tab-pane label="Energy">
    <div class="row">
    <div class="col-12 col-md-10 offset-lg-1">
    <energy-consumption/>
    </div>
    </div>

    </el-tab-pane>
    <el-tab-pane label="Transportation">
    Comming Up
    </el-tab-pane>
    <el-tab-pane label="Diet and Meals">
    Comming Up
    </el-tab-pane>
    <el-tab-pane label="Waste Disposal">
    Comming Up
    </el-tab-pane>
    </el-tabs>







    </app-layout>
    </template>
    <script>
    import AppLayout from '../Layouts/AppLayout.vue';
    import EnergyConsumption from '../calculator/EnergyConsumption.vue';
    export default {
    components:{
    AppLayout,
    EnergyConsumption,

    },
    props:{
    title:{},
    response:{},
    },


    data(){return{
    subtitle:'Calculate emissions by converting activity data to CO₂ with standardised emission factors.',
    tabPosition: 'left',



    }},




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

    <style scoped>
    ol li{
    list-style-type:lower-roman;
    width:90%;
    margin-bottom:10px;
    }

    </style>