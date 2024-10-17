<template>
<landing-layout>
<banner-component/>





<div class="container-fluid feature py-0">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
    <!-- <h5 class="text-danger mb-3">Empowering sustainability through data</h5> -->
<p class="mb-0 text-left">
We provide robust tools and services to help organisations, businesses, and individuals track, report, and manage their carbon emissions. By offering data-driven solutions, we enable you to monitor your greenhouse gas (GHG) footprint, implement reduction strategies, and ensure compliance with environmental standards.
</p>

</div>
</div>
</div>








<div class="container-fluid feature bg-light py-0">
    <div class="container py-3">
        <div class="row g-0 p-0">
            <div class="col-md-6 col-12 bg-light d-flex align-items-center">
                <div class="p-5 list-dark">


<h4 class=" mb-4">Why Track and Report Carbon Emissions?</h4>

<p class="mb-0">
Tracking and reporting your carbon emissions is the foundation for effective climate action. Whether you are a business aiming to meet sustainability goals, a nonprofit working on environmental projects, or an individual committed to reducing your footprint, understanding your emissions is the key to making informed decisions.
</p>

<div class="list-dark">
<ol class="mt-3">
<li>
<p>
Regulatory compliance. Meet local and international regulatory requirements by accurately reporting your GHG emissions.
</p>
</li>
<li>
<p>
Sustainability goals. Tracking emissions allows you to set measurable targets and monitor progress toward reducing your carbon footprint.
</p>
</li>
<li>
<p>
Stakeholder engagement. Transparently reporting your emissions enhances trust and credibility with customers, investors, and stakeholders who increasingly prioritize sustainability.
</p>
</li>
<li>
<p>
Operational efficiency. Identifying emission sources can help you optimize energy use, reduce costs, and improve overall efficiency.
</p>
</li>

</ol>
</div>


<h4 class="mb-3 mt-5">
Key Features of Our Carbon Tracking Services
</h4>
<div class="romans-lowercase">
<ol>
    <li>
    <p>
    Tailored for Uganda’s landscape. Our system takes into account Uganda’s unique environmental, regulatory, and economic landscape, ensuring that the tracking process is relevant and accurate.
    </p>
    </li>
    <li>
    <p>
    Verified reporting standards. Our reporting aligns with global standards, ensuring that your carbon data is credible and suitable for compliance and stakeholder reporting.
    </p>
    </li>
    <li>
    <p>
    Sector-specific solutions. We provide industry-specific tracking solutions, including services for sectors such as agriculture, energy, transportation, and manufacturing, each with tailored methodologies.
    </p>
    </li>
    <li>
    <p>
    User-Friendly dashboard. Our digital platform allows you to visualize your carbon emissions data through a user-friendly dashboard, where you can view trends, compare periods, and export reports for internal and external use.
    </p>
    </li>
    <li>
    <p>
    Integration with carbon offset programs. For unavoidable emissions, our platform provides seamless integration with verified carbon offset projects registered in the Uganda Carbon Registry, allowing you to take immediate action by purchasing carbon credits.
    </p>
    </li>

    </ol>
</div>



<h4 class="mb-3 mt-5">
Who Can Use Our Emission Tracking System?
</h4>
<ol>
<li>
<p>
Businesses. Achieve sustainability goals, enhance operational efficiency, and maintain compliance with local and international regulations.
</p>
</li>
<li>
<p>
NGOs and government agencies. Accurately measure and report emissions from projects, enabling you to optimize environmental strategies and secure funding.
</p>
</li>
<li>
<p>
Individuals. Track your personal carbon footprint, whether it's from household energy use, travel, or other daily activities, and take meaningful steps to reduce it.
</p>
</li>

</ol>















</div>
</div>













<div class="col-md-6 col-12 bg-dark">
<div class="p-5">
<div class=" p-4">

<h3 class="mb-0 text-white text-uppercase pl-2" style="border-left:solid 5px white;">
    Understand Your Footprint</h3>
<div class="mt-3 text-white">
<p class="text-white mb-0">
At the heart of today’s climate action lies the power of data. Data that drives informed decisions, tracks progress, and supports the transition to a sustainable future.
</p>

</div>




</div>




<div class="counter-item  rounded p-4">
<h4 class="mb-0 text-white">  How Our Carbon Tracking and Reporting System Works?</h4>
<div class="mt-3 text-white">
<p class="text-white">
Our carbon tracking and reporting services are designed to simplify the process of managing emissions data while ensuring accuracy and transparency. Here’s how it works:
</p>
<ol class="mt-3">
<li>
<p class="text-white">
Data collection. We help you gather data from various emission sources, including energy use, transportation, manufacturing, and waste management. This can be done through manual data collection or automated monitoring tools.
</p>
</li>
<li>
<p class="text-white">
Carbon footprint calculation. Using verified methodologies, we calculate your total carbon footprint based on the data you provide. This includes direct (Scope 1) and indirect (Scope 2 and Scope 3) emissions, giving you a comprehensive understanding of your impact.
</p></li>
<li>
<p class="text-white">
Emissions reporting. Once your carbon footprint is calculated, we generate customized reports that are easy to understand and aligned with global reporting standards such as the Greenhouse Gas Protocol and the Paris Agreement.
</p></li>
<li>
<p class="text-white">
Ongoing monitoring and updates. We provide continuous tracking services to help you monitor changes in your emissions over time, ensuring you stay on track to meet your reduction targets.
</p>
</li>

<li>
<p class="text-white">
Strategic action Plans: Based on the data and reports, we work with you to develop actionable strategies for reducing emissions. Whether it’s adopting renewable energy, optimizing processes, or offsetting unavoidable emissions, we help tailor solutions to your specific needs.
</p>
</li>


</ol>
</div>

</div>




<div class="counter-item">
<div class="bg-secondary pl-5 pr-5 py-4 mt-2">
<h3 class="text-white mb-3">Benefits of Tracking Your Emissions</h3>
<p class="text-white mb-4">
Tracking carbon emissions is essential for businesses, organisations, and individuals who want to reduce their environmental impact and contribute to Uganda’s climate resilience. By understanding where emissions come from and how much is being generated, you can take targeted actions that drive sustainability, enhance operational efficiency, and align with national and global environmental goals.
</p>
<p>
<Inertia-link :href="route('login')" class="btn btn-danger btn-block border-0 p-3">Get Started Now</Inertia-link>
</p>
</div>



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
ul li{
margin-bottom: 10px;
list-style-type: circle;
}

ol li{
margin-bottom: 10px;
list-style-type: circle;
}

h1,h2,h3,h4,h5,h6{
letter-spacing: 0.3px;
}

</style>