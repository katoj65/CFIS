<template>
<landing-layout>
<banner-component/>





<div class="container-fluid feature py-0">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <!-- <h5 class="text-danger mb-3">Empowering sustainability through data</h5> -->
<p class="mb-0 text-left">
    Take action against climate change and make a tangible difference today. By offsetting your carbon emissions through the Uganda Carbon Registry, you can support local projects that not only reduce greenhouse gas emissions but also drive sustainable development in Uganda’s communities.
</p>

</div>
</div>
</div>



<div class="container-fluid feature bg-white py-0">
    <div class="container py-3">
        <div class="row g-0 p-0">
<div class="col-md-6 bg-light d-flex align-items-center">
                <div class="p-5">

<!-- <h6 class="section-title text-start text-danger text-uppercase mb-3">
Emission Reduction
</h6> -->
<h4 class=" mb-4">What is Carbon Offsetting?</h4>
<p class="mb-0">
Carbon offsetting allows individuals, businesses, and organisations to balance out their carbon emissions by investing in verified projects that reduce or remove carbon from the atmosphere. These projects generate carbon credits, each representing one ton of carbon dioxide equivalent (CO2e) reduced or removed.
</p>




<h4 class="mb-0 mt-5">Why Offset with Uganda Carbon Registry?</h4>
<div class="mt-3 mb-2">
<p>
    The Uganda Carbon Registry offers access to locally verified carbon reduction projects that provide a range of environmental, economic, and social benefits. Offsetting your emissions through our platform ensures that your support stays within Uganda, directly benefiting the communities and ecosystems most vulnerable to climate change.
</p>

</div>

<ol >
<li>
<p>
Support Local Projects.
</p>
</li>
<li>
<p>
    Empower Communities.
</p>
</li>
<li>
<p>
    Verified Carbon Credits.
</p>
</li>
<li>
<p>
    Tangible Environmental Impact.
</p>
</li>
</ol>


<h4 class="mb-0 mt-5 mb-3">How Carbon Offsetting Works</h4>
<ol>
<li>
<p class="mb-2">
Calculate your carbon footprint. Start by measuring the greenhouse gas emissions from your activities, whether it's for a household, organisation, or business. We provide tools to help you accurately assess your footprint.
</p>
</li>
<li>
<p class="mb-2">
Choose a verified project. Explore our portfolio of projects that focus on emission reductions, from reforestation and afforestation to clean energy initiatives. Each project is selected for its significant contribution to Uganda’s sustainability goals.
</p>
</li>
<li>
<p class="mb-2">
Purchase carbon credits. Once you’ve selected a project, you can offset your emissions by purchasing carbon credits. Every credit you purchase represents one ton of CO2e reduced or avoided.
</p>
</li>
<li>
<p class="mb-2">
Receive certification. After your purchase, you will receive a certificate that verifies your carbon offset contribution, demonstrating your commitment to reducing your environmental impact.
</p>
</li>
<li>
<p class="mb-2">
Monitor your impact: Stay informed on the progress of the projects you support. We offer transparent reporting on the outcomes and environmental benefits of your chosen projects.
</p>
</li>
</ol>


</div>
</div>









            <div class="col-md-6 bg-dark">
                <div class="p-5">
                    <div class=" p-4">

    <h1 class="mb-0 text-white text-uppercase pl-2" style="border-left:solid 5px white;">
        Understand Your Impact
    </h1>
    <div class="mt-3 text-white">
    <p class="text-white mb-0">
        Offsetting your emissions is a powerful step towards sustainability and environmental stewardship.
    </p>

</div>
</div>




<div class="counter-item  rounded p-4">
<h4 class="mb-0 text-white">  Who Can Offset Their Emissions?</h4>
<div class="mt-3 text-white">
<p class="text-white">
Whether you’re a business, nonprofit, government organisation, or individual, carbon offsetting is a powerful way to take action against climate change. Here’s how different groups can benefit:
</p>

<div class="mt-3">
<ul>
<li>
<p class="text-white">
Businesses. Offset corporate emissions to meet sustainability goals, comply with regulations, or enhance your corporate social responsibility (CSR) efforts.
</p>
</li>
<li>
<p class="text-white">
Individuals. Neutralize your personal carbon footprint by offsetting travel, home energy use, or lifestyle choices.
</p></li>

<li>
<p class="text-white">
Events. Make your events carbon-neutral by offsetting emissions from travel, logistics, and energy use.
</p></li>


<li>
<p class="text-white">
NGOs and Government Bodies. Offset operational emissions while supporting the communities and ecosystems most affected by climate change.
</p></li>





</ul>
</div>




</div>

</div>




<div class="counter-item  rounded p-4">
<h4 class="mb-0 text-white">Get Started Today</h4>
<div class="mt-3">
<p class="text-white">
Offsetting your emissions is a powerful step towards sustainability and environmental stewardship. By choosing to offset through the Uganda Carbon Registry, you are not only addressing your carbon footprint but also supporting projects that make a lasting impact on Uganda’s people and natural resources.
</p>
<a href="#" class="btn btn-danger btn-long p-3" style="border-radius:0;">Offset Now</a>

</div>
</div>




                </div>
            </div>
        </div>
    </div>
    </div>


















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
data(){return{

}},


computed:{
url(){
return this.$page.props.system.url;
}


}





}
</script>
<style scoped>
ul li, ol li{
list-style-type:circle;
margin-bottom: 10px;
}
h1,h2,h3,h4,h5,h6{
letter-spacing: 0.3px;
}

</style>