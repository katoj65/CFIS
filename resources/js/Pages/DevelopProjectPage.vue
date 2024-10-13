<template>
<landing-layout>
<banner-component/>


<section>
<div class="container-fluid feature py-0">
    <div class="container mt-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <!-- <h5 class="text-danger mb-3">Empowering sustainability through data</h5> -->
    <p class="mb-0 text-left">
        In today's fight against climate change, Uganda is at the forefront of creating a sustainable, carbon-neutral future. The Uganda Carbon Registry (UCR) is your trusted partner, offering the tools, expertise, and support needed to develop impactful carbon removal and reduction projects.
    </p>

    </div>
    </div>
</div>
</section>




<section>
<div class="container-fluid feature bg-white py-0">
<div class="container py-3">
<div class="row g-0 p-0">
<div class="col-md-6 bg-light d-flex align-items-center">
<div class="p-5">
<h4>Why Invest in Carbon Removal and Reduction Projects?</h4>
<ul>
<li>
<p>
Reduce Uganda's greenhouse gas (GHG) emissions and contribute to the global fight against climate change.
</p>
</li>

<li>
<p>
Promote sustainable practices that improve the livelihoods of local communities and ensure environmental preservation.
</p>
</li>


<li>
<p>
Generate verified carbon credits that can be traded in international markets, driving economic growth.
</p>
</li>


</ul>







<h4 class="mt-5">
Why Choose Us as a Development Partner?</h4>
<p class="mb-4">As Uganda’s premier carbon registry, we are committed to helping you create credible, impactful, and financially viable projects. Here’s how UCR supports you:</p>
<ul>
<li>
<p>
End-to-End support. Whether you're starting a project or scaling up, UCR provides comprehensive guidance, from project validation to registration and issuance of carbon credits.
</p>
</li>

<li>
<p>
    Localised expertise. Our deep understanding of Uganda’s environmental, economic, and regulatory landscape ensures that your project is compliant, sustainable, and positioned for success.
</p>
</li>


<li>
<p>
    Transparency and trust. UCR adheres to globally recognised standards, ensuring that every carbon credit is verified, reliable, and traceable.
</p>
</li>


<li>
    <p>
    Sustainability impact. Projects registered with UCR contribute directly to Uganda’s Nationally Determined Contributions (NDCs), supporting the country's efforts to meet its climate goals.
    </p>
    </li>



</ul>








                </div>
            </div>






            <div class="col-md-6 bg-dark">
                <div class="p-5">

                    <h2 class="text-white mb-4 title-border-left pl-2">Empowering Carbon Removal & Reduction Projects for a Greener Future</h2>
                    <p class="text-white mb-4">
                        The science is clear: carbon removal and reduction projects are essential for limiting global temperature rise and achieving net-zero emissions.
                    </p>



<h4 class="text-white mt-5">
Get Involved
</h4>
<p class="mt-3 text-white">By developing carbon removal and reduction projects with the Uganda Carbon Registry, you're not just offsetting carbon you're investing in Uganda's future. Together, we can create a more resilient, sustainable economy, while actively contributing to the global mission of mitigating climate change.</p>



<div class="bg-secondary p-5 mt-5 border-radius">
<h4 class="text-white">
    Start Your Project Today!
    </h4>
    <p class="mt-3 text-white">
        Partner with the Uganda Carbon Registry and take the next step toward a greener, more sustainable future.

    </p>


<contact-component/>
<Inertia-link :href="route('login')" class="btn btn-danger btn-block p-3 mt-4">
Get Started
</Inertia-link>
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
import BannerComponent from '@/components/BannerComponent.vue';
import LandingLayout from '@/Layouts/LandingLayout.vue';
import ContactComponent from '@/components/ContactComponent.vue';
export default {
components:{
BannerComponent,
LandingLayout,
ContactComponent

    }
}
</script>
<style scoped>
ul li{
list-style: outside;
color:black;
margin-bottom:15px;
}



</style>