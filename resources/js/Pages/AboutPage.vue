<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>





<div class="container-fluid feature bg-white py-0">
<div class="container py-3">
<div class="row g-0 pb-5">
<div class="col-12 col-md-8 offset-lg-2 pb-5">

<div class="py-2">
<h5 class="py-2">
Our Goal
</h5>
<p>
Our goal is to empower Uganda to achieve a sustainable, low-carbon future that aligns with our national climate commitments and the global Paris Agreement.<br/>
Through effective carbon management, financial inclusion, and community-led initiatives, we aim to reduce greenhouse gas emissions, build climate resilience, and promote economic growth across Uganda.
<br/>We are committed to providing the tools, resources, and support needed for businesses, organisations, and communities to actively participate in climate action, helping Uganda reach net-zero emissions and protect our valuable natural resources.
</p>
</div>




<div class="py-2">
    <h5 class="py-2">
    Our Vision
    </h5>
    <p>
    Our vision at Uganda’s Carbon Registry is a resilient, low-carbon Uganda where sustainable development and environmental stewardship drive prosperity and well-being for all.

    <br/>We envision a future where every Ugandan individuals, businesses, and communities actively participates in reducing emissions, protecting biodiversity, and safeguarding natural resources.
    </p>
    </div>







<div class="py-2">
    <h5 class="py-2">
        Why Uganda Needs a Carbon Registry?
    </h5>
    <ol>
        <li>
        <p>
        To accurately tracking and reduce carbon emissions .
        </p>
        </li>
        <li>
        <p>
      To generate carbon credit.
        </p>
        </li>
        <li>
        <p>
        To provide access to climate finance.
        </p>
        </li>
        <li>
        <p>
        To foster economic growth and job creation.
        </p>
        </li>
        <li>
        <p>
        To protecte Uganda’s natural resources.
        </p>
        </li>
        <li>
        <p>To contribute to global climate commitments. </p>
        </li>
        </ol>
    </div>



<div class="py-2">
<h5 class="py-1">
    The Impact of Climate Change on Uganda’s Economy
</h5>
<p>


    Climate change is having profound effects on Uganda, disrupting both its environment and economy. Uganda is highly vulnerable to changing weather patterns, with rising temperatures and irregular rainfall affecting agriculture, which employs about 70% of the population. <br/>
    Prolonged droughts and erratic rains damage crop yields, reduce food security, and strain water resources. <br/>The economic cost of climate change is substantial, with estimates suggesting that climate-related disasters could cost Uganda’s economy over 3% of its annual GDP by 2030 if unaddressed.

    <Inertia-link :href="route('climate_change.articles')" class="ml-2 text-danger">Read more <b-icon icon="arrow-right"></b-icon></Inertia-link>
</p>
</div>




<div class="py-2">
<h5 class="py-2">
Carbon Footprint Management
</h5>
<p>
The importance of monitoring and reducing carbon footprints has never been more critical. As Uganda strives to meet its climate commitments, understanding and managing carbon footprints becomes increasingly important for both public and private sectors.
<br/>
The CFIS plays a vital role in assessing the impact of various sectors on carbon emissions, enabling stakeholders to identify key areas for improvement and intervention.
<br/>
By providing accurate data on emissions, the system helps organisations and policymakers make informed decisions, ultimately supporting Uganda's sustainable development goals. Furthermore, it raises awareness among businesses and communities about their carbon footprints, encouraging a collective effort to reduce emissions and promote climate resilience.

</p>
</div>















<div class="py-2">
    <h5 class="py-2">
        Steering Financial Inclusion
    </h5>
    <p>
The Uganda Carbon Registry is helping small and medium-sized enterprises (SMEs) access funding for projects that reduce carbon emissions through its carbon credit microfinance services.
<br/>By creating carbon credits, SMEs can access new financial opportunities and invest in initiatives that reduce and remove carbon. The registry offers guidance for making informed investment decisions and supporting projects that align with Uganda's Nationally Determined Contributions (NDCs) and its goal of reaching net zero emissions. <br/>Through these efforts, we aim to build a more inclusive, sustainable economy and empower businesses to contribute significantly to climate action.

    </p>
    </div>





<div class="py-2">
<h5 class="py-2">
Carbon Market Growth
</h5>
<p>
The global carbon credit market boasts a value exceeding $300 billion and exhibits significant growth potential, particularly within the African context.
<br/> Uganda stands to enhance its standing in the carbon market by safeguarding its natural resources, fostering its capacity for carbon credit generation, and integrating the carbon market with financial services through innovative carbon credit microfinance.
<br/>
This strategic approach will fortify Uganda's position within the burgeoning African carbon market, presently estimated at approximately $6 billion. The Uganda Carbon Registry is actively engaged in integrating carbon credit microfinance with financial services, advocating for the preservation of natural resources, and augmenting Uganda's carbon market valuation. <Inertia-link :href="route('carbon-markets')" class="ml-2 text-danger">Read more   <b-icon icon="arrow-right"></b-icon></Inertia-link>

</p>
</div>



<div class="py-2">
    <h5 class="py-2">
    Opportunties for Uganda and Africa
    </h5>
    <p>
    Uganda stands at a pivotal moment in climate financing, with significant opportunities for growth and development through the carbon market.
    <br/> The global carbon market is valued at approximately $949 billion, showcasing immense potential for countries that engage in carbon credit trading.
    <br/>
    In Africa, the carbon market is estimated to reach approximately $2 billion by 2030, highlighting the continent's emerging role in the climate finance landscape.
    <br/>
    Carbon credits play a crucial role in this framework, allowing countries and businesses to offset their greenhouse gas emissions by investing in projects that reduce emissions elsewhere. Uganda can capitalize on this by developing smart carbon fund services that provide accessible financing options for smallholder farmers and businesses aiming to implement sustainable practices.<br/>
    The Uganda Carbon Registry is determined to take a lead in this sector, establishing a transparent platform for tracking carbon credits and fostering market participation. Key sectors that may benefit from these initiatives include agriculture, renewable energy, forestry, and waste management, all of which are essential for reducing emissions while enhancing economic resilience.


    <Inertia-link :href="route('about.carbon-offset-guide')" class="ml-2 text-danger">Read more   <b-icon icon="arrow-right"></b-icon></Inertia-link>

    </p>
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
subtitle:"Uganda Carbon Registry is the nation’s leading platform for managing, tracking, and reducing greenhouse gas emissions while fostering sustainable economic growth. As Uganda strengthens its commitment to climate resilience, our registry supports individuals, businesses, and communities in taking impactful climate actions that contribute to Uganda’s climate goals under the Paris Agreement."


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
margin-bottom: 10px;
list-style:lower-roman;
}
h1,h2,h3,h5,h5,h6{
letter-spacing: 0.3px;
}

</style>