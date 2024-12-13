<template>
<landing-layout>
<banner-component :subtitle="subtitle"/>
<div class="container mt-4 mb-5 pb-5">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<div>
<h5>
Why Climate Action Matters
</h5>
<p>
Uganda is experiencing the profound impacts of climate change, from erratic weather patterns to biodiversity loss and infrastructure damage. Addressing these challenges requires urgent and collective action. Through innovative tools and solutions, the Uganda Carbon Registry ensures that every effort counts towards a healthier planet.
</p>
</div>


<div class="mt-3">
<h5>
Our Role in Climate Action
</h5>
<p>
Carbon credits are generated through activities that either reduce greenhouse gas emissions or remove carbon dioxide from the atmosphere.
</p>

<ol>
<li class="text-muted">
Carbon footprint management.
</li>
<li class="text-muted">
Carbon credit facilitation.
</li>
<li class="text-muted">
Policy support and sdvocacy.
</li>
<li class="text-muted">
Public awareness and education.
</li>
<li class="text-muted">
Innovative climate financing
</li>
</ol>
</div>




<div class="mt-3">
<h5>
How You Can Get Involved
</h5>
<ol>
<li class="text-muted">
<strong>Measure Your Impact:</strong> Use our tools to calculate your carbon footprint and identify reduction strategies.
</li>
<li class="text-muted">
<strong>Support Local Projects:</strong> Invest in or purchase carbon credits from verified Ugandan projects.
</li>
<li class="text-muted">
<strong>Join the Movement:</strong> Participate in our workshops, events, and campaigns to spread the message of climate action.
</li>
</ol>

</div>


<div class="mt-3">
<h5>
Our Commitment
</h5>
<p>
The Uganda Carbon Registry is more than a platform, it’s a movement. We are committed to:
</p>
<ol>
<li class="text-muted">
    Enhancing transparency and accountability in carbon markets.
</li>
<li class="text-muted">
    Strengthening Uganda’s position as a leader in sustainable development.
</li>
<li class="text-muted">
    Ensuring that climate action benefits both people and nature.
</li>
</ol>
<p>
    Together, we can turn ambition into action and create a sustainable legacy for future generations. Let’s work hand-in-hand to combat climate change and secure a thriving Uganda.
</p>
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
subtitle:"We are dedicated to transforming Uganda’s climate challenges into opportunities by empowering individuals, businesses, and communities to engage in effective climate action."


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