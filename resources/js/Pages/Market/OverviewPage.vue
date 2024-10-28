<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<section class="bg-white py-5">
<div class="container">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">

<div class="mb-4">
<h5>
    What is Carbon Credit?
</h5>
<p>
    A carbon credit is a tradable permit representing one metric ton of carbon dioxide (CO₂) or its equivalent in other greenhouse gases that has been reduced, avoided, or removed from the atmosphere through certified climate action projects. <br/>
    A carbon market is a trading system where carbon credits, representing reduced or avoided greenhouse gas emissions, are bought and sold, allowing businesses, governments, and individuals to offset their emissions and meet environmental targets.
</p>
<p>
 Carbon markets functions mainly through two main types;
</p>
<ol>
<li>
<p>
    Compliance Market: Regulated by government policies, this market requires companies or countries to limit their emissions, often under cap-and-trade systems, where they can buy credits if they exceed their limits or sell them if they emit less.
</p>
</li>
<li>
<p>
    Voluntary Market: This market allows businesses, organisations, and individuals to voluntarily offset their emissions by purchasing carbon credits, typically from projects like reforestation, renewable energy, or sustainable agriculture.
</p>
</li>

</ol>

</div>

<div class="mb-4">
<h5>
How It Carbon Market Works
</h5>
<ol>
<li>
<p>
Carbon credit registration and verification. Our registry provides a robust framework for registering and verifying carbon credits. Each project undergoes rigorous validation, ensuring that every carbon credit represents real, additional, and measurable reductions in emissions.
</p>
</li>

<li>
<p>
Buying carbon credits. Organisations, businesses, and individuals seeking to offset their carbon footprint can purchase verified Ugandan carbon credits through our platform.<br/> This investment not only helps reduce their environmental impact but also directly supports local climate positive initiatives.

</p>
</li>

<li>
<p>
Selling carbon credits. Project developers and communities engaged in emission-reduction activities can generate income by selling their carbon credits. Our platform connects sellers with a network of buyers, ensuring fair market access and competitive pricing.
</p>
</li>

<li>
<p>
All transactions on our platform are transparent, secure, and fully traceable. Using blockchain technology, we ensure that each credit has a unique identifier, preventing double-counting and ensuring trustworthiness in every transaction.

</p>
</li>

<li>
    <p>
Our platform provides access to real-time data on market trends, credit prices, and demand across sectors. Our platform provides insights that empower participants to make informed decisions and plan future projects, investments, and climate strategies.

    </p>
    </li>



</ol>


</div>



<div class="mb-4">
<h5>
How to Participate
</h5>
<ol>
<li>
<p>
For Buyers.
</p>
<ul>
<li class="text-muted">
Register on the Uganda Carbon Registry platform.
</li>
<li>
Browse available carbon credits and select projects that align with your sustainability goals.
</li>
<li>
Complete your purchase and receive verified carbon credits, helping you achieve your carbon neutrality objectives.
</li>
</ul>
</li>
<li>
<p>
For Sellers.
</p>
<ul>
<li>Register your project and submit the required documentation.</li>
<li>Our team will guide you through the verification process to ensure eligibility.</li>
<li>Upon approval, list your credits on the market and engage with potential buyers.</li>
</ul>
</li>
<li>
<p>
For Investors.
<ul>
<li>Support Uganda’s carbon market by investing in verified carbon projects.</li>
<li>Diversify your portfolio with sustainable assets while contributing to climate action and community development.</li>

</ul>
</p>
</li>
</ol>
</div>


<div class="mb-4">
    <h5>
 Why Choose Ugandan Carbon Market?
    </h5>
<p>
Ugandan carbon market offers a unique opportunity to invest in sustainable development while supporting one of Africa's most biodiverse regions.<br/>
With a rapidly growing carbon credit market and abundant natural resources like forests and wetlands, Uganda provides an ideal environment for carbon offset projects that generate high-impact carbon credits.
</p>
</div>

<div class="mb-4">
<h5>
Start Trading Today
</h5>
<p>
    Join the Uganda Carbon Registry’s Carbon Market to be part of Uganda’s low-carbon future.<br/> Whether you’re a buyer, seller, or investor, our platform empowers you to make a measurable impact. Together, let’s build a sustainable, prosperous Uganda through climate action.
</p>

<link-pointer-component :title="'Join and start trading now'" :url="'login'"></link-pointer-component>
</div>








</div>
</div>
</div>
</section>
</landing-layout>
</template>
<script>
import LandingLayout from '../../Layouts/LandingLayout.vue';
import BannerComponent from '../../components/BannerComponent.vue';
import LinkPointerComponent from '../../components/LinkPointerComponent.vue';
export default {
components:{
LandingLayout,
BannerComponent,
LinkPointerComponent


},

data(){return{
subtitle:"Our carbon market enables participants to buy, sell, and trade carbon credits generated by projects that actively reduce greenhouse gas (GHG) emissions, contributing to both local sustainability and global climate action.",





}}



}
</script>
<style scoped>
ol li{
list-style-type: lower-roman;
}
ul li{
list-style:circle;
}

ol li ul li{
margin-bottom:10px;
}
</style>