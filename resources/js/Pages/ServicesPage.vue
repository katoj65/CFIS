<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>


<section class="py-4">
<div class="container">
<div class="col-12 col-md-8 offset-lg-2">

<div class="row">

<div class="col-12  p-3" v-for="(s,key) in services" :key="key">
<div class="card h-100 border-0 shadow-sm">
<div class="card-header border-0">
<div class="card-title bold">
{{ s.title }}
</div>
</div>
<div class="card-body">

<p>
{{ s.description }}
</p>

</div>
</div>
</div>
</div>


</div>
</div>
</section>

</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';
import BannerComponent from '../components/BannerComponent.vue';
export default {
components:{
LandingLayout,
BannerComponent
},

data(){return{
subtitle:'We provide comprehensive solutions for carbon management, financing, and climate resilience. Our services support organisations, businesses, and individuals in measuring, managing, and offsetting their carbon emissions to foster a sustainable and resilient Uganda.',


services:[
{title:'Carbon Footprint Information System (CFIS)',
description:'Our Carbon Footprint Information System enables accurate tracking and reporting of greenhouse gas emissions across sectors. CFIS is a robust tool for businesses, institutions, and individuals to monitor their emissions and identify areas for improvement. Key features include comprehensive carbon tracking and data management, customizable reporting for transparency and accountability, and access to insights on reducing emissions and meeting climate targets.'
},
{title:'Carbon Credit Generation',
description:'Registry provides pathways for organizations to generate and earn carbon credits through verified reduction activities. These credits can then be traded in carbon markets or used to offset emissions. We support carbon credit certification for eligible projects, guidance on maintaining compliance with international standards, and opportunities for organisations to monetise their sustainability efforts through credit sales.'
},
{title:' Carbon Offset Projects',
description:'Carbon offsetting is a practical solution to balance unavoidable emissions. Our registry connects organizations and individuals to certified offset projects across Uganda, from reforestation to renewable energy initiatives. By participating in our offset projects, you contribute to reducing Uganda’s national carbon footprint, Support biodiversity and natural habitat restoration, and empower local communities through sustainable project involvement.'
},
{title:'Carbon Fund',
description:'Our Carbon Fund offers targeted financial support for carbon reduction initiatives across Uganda. This fund is dedicated to helping small and medium enterprises (SMEs), grassroots organizations, and individual project developers access the capital needed to launch and scale their carbon projects. Services include carbon microfinancing solutions, access to loans and grants, and tools for generating carbon credits from funded projects.'
},
{title:'Smart Carbon Financing Integration',
description:'To expand climate financing access, we partner with financial institutions to integrate climate-focused financial products. Through our network, businesses and individuals can find tailored financial instruments to support their carbon reduction goals. Services include climate-smart loans and financing solutions, guidance for integrating financial services with carbon credit generation, and opportunities to foster financial inclusion for sustainable development.'
},
{title:'Capacity Building and Technical Support',
description:'We offer training and technical assistance to build local expertise in carbon management. This program is designed for organizations, businesses, and government institutions looking to strengthen their role in climate action. We provide hands-on workshops and seminars, technical support for carbon reduction projects and data management, and guidance on climate policy and sustainability best practices.'
},
{title:' Monitoring and Reporting Services',
description:'Transparent reporting is essential for maintaining accountability in emissions reduction. Our team offers monitoring and reporting services that help organizations verify their carbon reduction claims and track progress over time. This include annual and periodic emissions reporting, project monitoring for accuracy and compliance, and support for meeting national and international reporting standards.'
}

],






}}




}
</script>
<style scoped>
ol li{
list-style: lower-roman;
margin-bottom:10px;
}
</style>