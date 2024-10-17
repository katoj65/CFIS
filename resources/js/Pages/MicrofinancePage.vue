<template>
<landing-layout>
<!-- <banner-component :subtitle="'Empower, Invest, and Reduce Carbon Emissions'"/> -->


<div class="container-fluid feature py-2">
<div class="container mt-5">
<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

<h3 class="display-7 mb-4">Empower, Invest and Reduce Carbon Emissions</h3>


<p class="mb-0 text-left">
Carbon credit microfinance presents a unique opportunity to drive climate action while promoting economic development. By providing financial support to farmers, businesses, and local communities, carbon credit microfinance empowers them to participate in carbon-reducing initiatives, earn carbon credits, and contribute to both local and global sustainability goals.
</p>

</div>

    </div>
</div>









<div class="container-fluid feature bg-light py-0">
    <div class="container py-3">
        <div class="row g-0 p-0">
            <div class="col-md-6 bg-light d-flex align-items-center">
                <div class="p-5">




                    <h4 class="display-7 mb-4">What is Carbon Credit Microfinance?</h4>

                    <p>
                        Carbon credit microfinance combines the principles of microfinance with the growing demand for carbon credits. It offers loans and financial services to individuals and small businesses, enabling them to undertake projects that reduce greenhouse gas emissions. These projects generate carbon credits that can be sold to buyers, providing an additional revenue stream for participants.
                    </p>
                    <div>

                    <p>
                        This approach creates opportunities for local communities to benefit from sustainable projects, such as renewable energy, reforestation, and climate-smart agriculture, while also contributing to global efforts to combat climate change.
                    </p>

                    </div>




                    <div class="bg-light p-4 mt-3">
                        <h4 class="mb-3">
                        Projects and Initiatives we Fund
                        </h4>

<ul>
<li>
<p>
    Renewable Energy Projects
</p>
</li>

<li>
<p>
    Reforestation and Afforestation
</p>
</li>
<li>
<p>
Waste Management and Methane Capture
</p>
</li>

<li>
<p>
Water Conservation and Management
</p>
</li>

<li>
<p>
Energy-Efficient Technologies
</p>
</li>


<li>
<p>
Carbon Sequestration Projects
</p>
</li>

<li>
<p>
Community-Led Climate Adaptation Projects
</p>
</li>

<li>
<p>
Carbon Credit Projects
</p>
</li>
<li>
<p>
Micro-loans
</p>
</li>


</ul>


<h3 class="mb-4 mt-5">Join the Carbon Credit Microfinance</h3>
<p class="mb-4">
We are committed to supporting carbon credit microfinance initiatives in Uganda. By providing financing and technical assistance to local communities, we empower them to participate in the carbon credit market and contribute to global climate goals.
</p>

<p>
    <Inertia-link :href="route('login')" class="btn btn-danger btn-block p-3">Join Now</Inertia-link>
</p>


                    </div>









                </div>
            </div>









            <div class="col-md-6 bg-dark">
                <div class="p-5">

 <h2 class="mb-0 text-white mb-3 text-uppercase" style="border-left:solid 5px white;padding-left:10px;line-height:40px; line-height:50px;">
    Be Part of the Solution Now
</h2>
<p class="text-white mb-5">Imagine a world where local communities thrive while combating climate change. With carbon credit microfinance,
    we’re making that vision a reality!</p>






                    <h4 class="mb-0 text-white p-3">How Carbon Credit Microfinance Works</h4>
                    <ol class="mt-3">
                        <li>
                            <p class="text-white ">
                                Financial Support. Microfinance institutions provide small-scale loans to farmers, businesses, and community groups to fund climate-friendly projects. These loans often target activities like adopting renewable energy, improving agricultural practices, or engaging in reforestation.
                            </p>
                        </li>
                        <li>
                            <p class="text-white ">
                                Carbon Reduction Projects. Loan recipients use the funds to implement initiatives that reduce or remove carbon emissions. For example, a farmer may plant trees or adopt more sustainable farming practices, while a small business might invest in energy-efficient technologies.
                            </p>
                        </li>
                        <li>
                            <p class="text-white ">
                                Carbon Credits Generation. The projects are monitored, and the resulting carbon reductions are quantified. For every metric ton of carbon dioxide equivalent (CO2e) reduced or sequestered, the project generates one carbon credit.
                            </p>
                        </li>
                        <li>
                        <p class="text-white ">
                            Sale of Carbon Credits. Once verified, the carbon credits can be sold on carbon markets. Proceeds from the sale help repay the initial loans, and any additional revenue is distributed to the project participants, providing an ongoing financial benefit.
                        </p>
                        </li>
                        <li>
                        <p class="text-white ">
                            Reinvestment. With the success of the project, individuals and communities can reinvest in further carbon reduction activities, creating a cycle of sustainability and economic growth.
                        </p>
                        </li>



                    </ol>
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
components:{
LandingLayout,
BannerComponent
},
data(){return{




}}




}
</script>
<style scoped>

ol li{
list-style-type: lower-roman;
margin-bottom:20px;
}

ul li{
list-style-type:disc;
margin-bottom:10px;
}
.col-12{
margin-bottom:15px;
}
.get_involved li{
color:white;
}
.get_involved li p{
font-size:17px;
}
</style>