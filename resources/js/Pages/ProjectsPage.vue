<template>
<landing-layout>
<banner-component :subtitle="subtitle">
<div class="row">
<div class="col-12 col-md-6 offset-lg-3 text-center pt-3">

<ul>
<li><Inertia-link :href="route('project.developer')" class="text-white"><b-icon icon="tree-fill"></b-icon> Become a developer</Inertia-link></li>
<li>
<Inertia-link class="text-white"> <b-icon icon="search"></b-icon> Search</Inertia-link></li>
</ul>


</div>
</div>
</banner-component>






<!--
<section style="" class="py-0 pt-3">
<div class="container">
<div class="row">
<div class="col-12 col-md-3"></div>
<div class="col-12 col-md-6">
<div>
<div class="card card-preview border-0">
<div class="card-inner">
<div class="preview-block">
<div class="row">


<div class="col-sm-12">
<div class="form-group">
<div class="form-control-wrap">
<input type="text" class="form-control bg-light border-0" id="default-01" placeholder="Search..." style="height:50px;">
</div>
</div>
<div>
<Inertia-link :href="route('project.developer')" class="text-gray mr-5"> <b-icon-cloud-drizzle-fill></b-icon-cloud-drizzle-fill> Develop a Project</Inertia-link>
<Inertia-link :href="route('project.support')" class="text-gray mr-5"> <b-icon-heart-fill></b-icon-heart-fill> Support a Project</Inertia-link>
<Inertia-link :href="route('project.help')" class="text-gray mr-5"> <b-icon-exclamation-triangle-fill></b-icon-exclamation-triangle-fill> Need Help</Inertia-link>

</div>
</div>


</div>

</div>
</div>
</div>
</div>

</div>
<div class="col-12 col-md-3"></div>
</div>
</div>
</section>
 -->








<section class="bg-white py-3">
<div class="container">
<div class="row">

<div class="col-12 col-md-10 mb-5 offset-lg-1 ">

    <div class="row py-3" style="border-radius:15px;">
        <div class="col-12 col-md-3" v-for="(n,key) in 24" :key="key">

            <div class="card card-hover mb-3 border-0 shadow-sm" style="border-radius:0;">
                <Inertia-link :href="route('project.show',{id:1})">
                <img src="http://localhost/carbon/public/images/deforestation.jpeg" alt="course" class="card-img-top"></Inertia-link>
                <!-- Card Body -->
                <div class="card-body">
                    <h6 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit text-dark">Gatsby JS: build blog with GraphQL and React</a></h6>
                    <!-- List -->
                    <ul class="mb-3 list-inline">
                        <li class="list-inline-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                </path></path></svg>
                            </span>
                            <span>3h 56m</span>
                        </li>
                        <li class="list-inline-item">
                            <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                            </svg>
                            Beginner
                        </li>
                    </ul>
                    <div class="lh-1">
                        <span class="align-text-top">
                            <span class="fs-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="text-warning">4.5</span>
                        <span class="fs-6">(9,370)</span>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="card-footer border-0">
                    <div class="row align-items-center g-0">
                        <div class="col-auto">

                        </div>
                        <div class="col ms-2">
                            <span>Morris Mccoy</span>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="text-reset bookmark">
                                <i class="fe fe-bookmark fs-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
import BannerComponent from '../components/BannerComponent.vue';
import LandingLayout from '../Layouts/LandingLayout.vue';
export default {
components: {
LandingLayout,
BannerComponent
 },
 props:{
response:{},
 },
data(){return{
subtitle:"Our registry supports carbon offset projects that provide verifiable, measurable, and permanent reductions in greenhouse gas emissions. These projects include initiatives like reforestation, renewable energy installation, and improved agricultural practices that are critical to offsetting emissions and achieving Uganda’s climate objectives.",




}},

computed:{
url(){
return this.$page.props.system.url;
}


}





}
</script>
<style scoped>
ul li{
float:left;
margin-right:20px;
}
ul li a {color:darkred}
</style>