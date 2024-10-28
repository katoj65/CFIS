<template>
  <landing-layout>
  <section class="py-5">
          <div class="container position-relative z-2 mt-3 mt-sm-4 mt-md-1">
          <div class="row pt-xl-3 pt-xxl-4">
          <div class="col-lg-7 col-xxl-6">
          <h1 class="display-3 text-center text-lg-start title-font" style="font-size:50px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
          <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">CONTRIBUTE TO <br/>A SUSTAINABLE</span> <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> FUTURE</span> <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;color:white;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">NOW!</span>
          </h1>

          </div>
          <div class="col-lg-5 offset-xxl-1 pt-sm-3">

          <div class="row mt-5">
          <div class="col-12 col-md-4 mt-5">
          <img src="http://localhost/carbon/public/images/antonio_guterres.png">
          </div>
          <div class="col-12 col-md-6">

          <div style="position:absolute;bottom:10px;background:white;">
          <h6 class="p-0 m-0" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Antonio Guterres</h6>
          <p class="text-secondary" style="padding:0;margin:0;line-height:20px;">UN Secretary General</p>
          </div>
          </div>
          <div class="col-12">
          <p class="fs-lg text-left text-lg-start pb-3 pb-sm-0 pb-md-2 mb-4 mb-sm-5 text-danger" style="font-size:18px;line-height:30px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
          "The Era of Global Warming has Ended: The Era of Global Boiling Has Arrived."
          </p>
          </div>
          </div>





          <!-- Contact form -->

          </div>
          </div>
          </div>

          <!-- Parallax image -->

  </section>



<section>
  <div class="container-fluid py-5 p-0 bg-dark2">
  <div class="row g-0">
  <div class="col-12 col-md-12">

      <section>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                      <div class="text-center mb-8">

                          <h2 class="mb-3 mt-3 text-white">
                             <span style="font-family:'Times New Roman', Times, serif;"> OUR MISSION</span>
                          </h2>
                          <p class="mb-0 px-lg-6 text-white" style="font-size:16px;">
                              We’re on an ambitious mission to turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda. It's time to unite and reduce emissions, protect ecosystems, and invest in sustainable solutions.
                          </p>
                          <div class="p-3">
                              <Inertia-link  :href="route('about')" class="btn btn-outline-light" style="border:solid 2px white;border-radius:20px;font-weight:bold;"> Get To Know Us <i class="bi bi-arrow-right"></i></Inertia-link>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
  </div>
  <div class="col-12 col-md-4"></div>
  </div>
  </div>

</section>











  <section class="my-xl-10 my-5" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
      <div class="container">
      <div class="row">
      <div class="col-10 offset-lg-1">

      <div class="row align-items-center">
      <div class="col-lg-4 col-md-8 col-12">
      <div class="mb-6 mb-lg-0" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">


      <h2 class="my-3 text-uppercase">
      <span style="font-family:'Times New Roman', Times, serif;"> Leading the Way in Climate Action</span>
      </h2>
      <p class="mb-3">
          The Uganda Carbon Registry leads efforts to combat climate change by promoting a shift to a sustainable, low-carbon economy. We offer carbon financing, emissions tracking, biodiversity protection, and community resilience support, aiming to create a future where economic growth and environmental protection go hand in hand. Our goal is to reduce carbon emissions, promote green innovation, and make climate financing accessible to all, helping Uganda achieve its climate goals while building a sustainable economy for all.

  </p>
  <p class="mb-2">
      Uganda aims to reduce greenhouse gas emissions by 22% by 2030, focusing on renewable energy, climate-resilient agriculture, and sustainable land management. The Uganda Carbon Registry tracks carbon credits and supports climate projects, contributing to accurate emissions accounting and sustainable development. </p>

<div class="mb-4">
<link-pointer-component :title="' Learn more about our services'" :url="'services'"/>
</div>


      </div>
      </div>
      <div class="col-lg-7 offset-lg-1 col-12">
      <div class="row">
      <div class="col-md-6">
      <div class="card bg-danger bg-opacity-10 border-0 mb-5" data-cue="fadeIn" data-delay="500" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 700ms; animation-direction: normal; animation-fill-mode: both;">
      <div class="card-body">
      <div class="mb-4">
      <b-icon icon="tree-fill" scale="2"></b-icon>
      </div>
      <div class="mb-4">
      <h5>Carbon Footprint Management</h5>
      <p class="mb-0">
      Tools to help businesses, organizations, and individuals track, measure, and reduce carbon emissions to contribute to national emission reduction targets and Uganda’s NDCs under the Paris Agreement.
      </p>
      </div>

      <Inertia-link :href="route('cfis.overview')" class="icon-link icon-link-hover link-danger">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
      </path>
      </svg>
      </Inertia-link>
      </div>
      </div>
      <div class="card bg-warning bg-opacity-10 border-0 mb-5 mb-lg-0" data-cue="fadeIn" data-delay="1000" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 1000ms; animation-direction: normal; animation-fill-mode: both;">
      <div class="card-body">
      <div class="mb-4">
      <b-icon icon="tree-fill" scale="2"></b-icon>
      </div>
      <div class="mb-4">
      <h5>Carbon Markets</h5>
      <p class="mb-0">
      Entities can use the registry to participate in carbon markets, buying and selling carbon credits to offset their emissions and support greenhouse gas reduction projects, assisting Uganda in meeting its climate commitments.
      </p>
      </div>

      <Inertia-link :href="route('market.overview')" class="icon-link icon-link-hover link-warning">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
      </path>
      </svg>
      </Inertia-link>
      </div>
      </div>
      </div>
      <div class="col-md-6 mt-md-5">
      <div class="card bg-info bg-opacity-10 border-0 mb-5" data-cue="fadeIn" data-delay="1500" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 1500ms; animation-direction: normal; animation-fill-mode: both;">
      <div class="card-body">
      <div class="mb-4">
      <b-icon icon="tree-fill" scale="2"></b-icon>
      </div>
      <div class="mb-4">
      <h5>Carbon Fund</h5>
      <p class="mb-0">
      Get access to financial resources to invest in projects aimed at reducing greenhouse gas emissions, generating carbon credits that can be sold in carbon markets.
      </p>
      </div>

      <Inertia-link :href="route('microfinance.overview')" class="icon-link icon-link-hover link-info">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
      </path>
      </svg>
      </Inertia-link>
      </div>
      </div>
      <div class="card bg-success bg-opacity-10 border-0 mb-5 mb-lg-0" data-cue="fadeIn" data-delay="2000" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 2000ms; animation-direction: normal; animation-fill-mode: both;">
      <div class="card-body">
      <div class="mb-4">
      <b-icon icon="tree-fill" scale="2"></b-icon>
      </div>
      <div class="mb-4">
      <h5>Carbon Offset Projects</h5>
      <p class="mb-0">
      Facilitating the development of carbon offset projects that decrease or eliminate emissions, such as reforestation and clean energy initiatives. These projects produce carbon credits, promoting sustainable practices and contributing to Uganda’s low-carbon growth path.
      </p>
      </div>

      <Inertia-link :href="route('projects.overview')" class="icon-link icon-link-hover link-success">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
      </path>
      </svg>
      </Inertia-link>
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



































  <section class="text-light row bg-light2 py-5">
      <div class="container pb-md-6">
    <div class="">
    <div class="offset-lg-1 col-10">
        <div class="row mt-4">

          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="100">
            <div class="ml-3">
              <h5> Measure Carbon Footprint </h5>
              <p>
                  Start your carbon mitigation journey by accurately measuring your carbon emissions. With real-time monitoring, track and reduce your environmental impact efficiently.
              </p>
              <div>
              <Inertia-link href="" class="btn btn-clear text-danger p-0">Calculate your  emissions <i class="bi bi-arrow-right"></i></Inertia-link>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="200">

            <div class="ml-3">
              <h5>Manage Carbon Emissions</h5>
              <p>
                  Implement comprehensive carbon management strategies to lower emissions, optimize resource use, and meet sustainability goals while boosting operational efficiency.
              </p>
              <div>
                  <Inertia-link href="" class="btn btn-clear text-danger p-0">Create your Carbon reduction strategy <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="300">

            <div class="ml-3">
              <h5>Offset Carbon Emissions</h5>
              <p>
                  Invest in certified carbon offset projects that reduce emissions elsewhere, balancing out your carbon footprint and contributing to global climate action.
              </p>
              <div>
                  <Inertia-link href="" class="btn btn-clear text-danger p-0">Investiment in carbon reduction <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="400">

            <div class="ml-3">
              <h5>Carbon Markets</h5>
              <p>
                  Tap into carbon markets by buying and selling carbon credits, turning emission reductions into financial value and supporting global climate initiatives.
              </p>
              <div>
                  <Inertia-link href="" class="btn btn-clear text-danger p-0">Get Access to Carbon Markets <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="500">

            <div class="ml-3">
              <h5>Carbon Fund</h5>
              <p>
                  Access funding tailored for climate-friendly projects, empowering local communities to implement low-carbon solutions and green technologies.
              </p>
              <div>
                  <Inertia-link href="" class="btn btn-clear text-danger p-0">Finance Your Emission Reduction Plan <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="600">

            <div class="ml-3">
              <h5>Education Hub</h5>
              <p>
                  Equip yourself and your community with the knowledge needed to tackle climate challenges through an accessible environmental education hub focused on carbon mitigation and sustainability.
              </p>
              <div>
                  <Inertia-link :href="route('hub')" class="btn btn-clear text-danger p-0">Empower yourself with knowledge <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>





          <div class="col-12">
            <!--Stats start-->
            <section class="py-2">
               <div class="container pt-5">
                   <div class="row">
                       <div class="col-lg-3 col-6">
                           <div class="text-center px-lg-5 mb-5 mb-lg-0">
                               <small
                                   class="text-uppercase  ls-md fw-semibold text-muted">Active Clients</small>
                               <h2 class="mb-0 mt-2">50+</h2>
                           </div>
                       </div>
                       <div class="col-lg-3 col-6">
                           <div class="text-center px-lg-5 mb-5 mb-lg-0">
                               <small
                                   class="text-uppercase  ls-md fw-semibold text-muted">Projects</small>
                               <h2 class="mb-0 mt-2">200+</h2>
                           </div>
                       </div>
                       <div class="col-lg-3 col-6">
                           <div class="text-center px-lg-5 mb-5 mb-lg-0">
                               <small
                                   class="text-uppercase ls-md fw-semibold text-muted">Project Developers
                                   </small>
                               <h2 class="mb-0 mt-2">96</h2>
                           </div>
                       </div>
                       <div class="col-lg-3 col-6">
                           <div class="text-center px-lg-5 mb-5 mb-lg-0">
                               <small
                                   class="text-uppercase ls-md fw-semibold text-muted">Impact Created</small>
                               <h2 class="mb-0 mt-2">30%</h2>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           </div>



        </div>

    </div>
    </div>

      </div>
    </section>






  <!--testmonial start-->
  <section class="bg-white py-5">
      <div class="container">
          <div class="col-xxl-8 offset-xxl-2 col-md-12">
              <div class="row align-items-center">
                  <div class="col-md-4">
                      <div class="mb-5 mb-lg-0">
                          <img src="http://localhost/carbon/public/images/lagarde.png" alt="textmonial" class="img-fluid rounded-3" />
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="mb-4">
                          <p class="lead text-dark me-xl-6">
                              “The longer we delay, the more we will pay. And the higher the cost will be—not just financially, but in human lives, in livelihoods, and in lost opportunities.”
                          </p>
                      </div>
                      <div class="d-flex justify-content-between">
                          <div>
                              <h5 class="mb-0">Christine Lagarde</h5>
                              <small>President of the European Central Bank</small>
                          </div>
                          <div>
                              <figure>
                                  <img src="http://localhost/carbon/public/images/eu.png" alt="brand" style="width:50px" />
                              </figure>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!--testmonial end-->






  <!--location-->
  <section class="mb-xl-9 py-5 bg-light2">
      <div class="container">

        <div class="text-center mb-xl-7 mb-5">
          <small class="text-uppercase ls-md fw-semibold text-danger">News and Updates</small>
          <h2 class="my-3 text-white-stable"><span class="title-font2">STAY AHEAD OF THE CURVE</span></h2>
          <p class="mb-0 text-body" style="padding-left:25%;padding-right:25%;">
            The climate crisis has never been more urgent, and with every new headline, the impacts on our planet and our future become clearer.</p>
       </div>



        <div class="row g-4">





    <div class="col-md-3 col-12" v-for="(n,key) in 4" :key="key">
    <div class="bg-white card border-0 p-3">

    <figure class="mb-3 card-lift">
        <img src="http://localhost/carbon/public/images/deforestation.jpeg" class="img-fluid" />
    </figure>
    <div>
    <h6>Some title</h6>
        <div class="ms-2">
            <span>WeWork, 412, Residency Rd, Shanthala Nagar,
                Ashok Nagar, Bengaluru, Karnataka 560025</span>
        </div>
    </div>
    </div>
    </div>





    </div>

      </div>
    </section>
    <!--location-->






<!--Call to action start-->
<section class="my-lg-7 py-2 bg-light2">
  <div class="container">
      <div class="row bg-pattern rounded-3 py-lg-7 py-5 g-0">
          <div class="col-md-8 offset-md-2">
              <div class="text-center position-relative z-1 px-5"
                  >
                  <div class="mb-5">
                      <h3 class="h2 text-white-stable mb-3">
                       <span class="title-font2 text-uppercase"> Ready to Take Action?</span>
                        </h3>
                      <p class="mb-0 text-white-stable">
                        Take action today: Measure your carbon footprint, set ambitious goals, and be part of Uganda's climate solution. Together, we can build a sustainable, climate-resilient future for all.
                      </p>
                  </div>



                  <form
                  class="row d-flex justify-content-center mb-6 needs-validation"
                  novalidate @submit.prevent="email_subscription">
                  <div class="col-lg-6">
                      <label for="subscribeEmail"
                          class="visually-hidden">Email</label>
                      <div class="input-group has-validation">
                          <input type="text" id="subscribeEmail"
                              class="form-control border-danger"
                              placeholder="Enter your business email"
                              aria-label="Enter your business email"
                              aria-describedby="basic-addon2"
                              required v-model="form.email" />
                          <button class="btn btn-danger"
                              type="submit" id="basic-addon2">Join
                              Now</button>
                          <div class="invalid-feedback text-start">
                              Please choose a email.</div>
                      </div>
                  </div>
              </form>







              </div>
          </div>
      </div>
  </div>
</section>
<!--Call to action end-->








<div class="swal2-container swal2-center swal2-backdrop-show" v-if="success==true" >
<div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
<div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
<span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
<div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
<div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);">

</div>
</div>
<img class="swal2-image" style="display: none;">
<h2 class="swal2-title" id="swal2-title" style="display: flex;">Successful!</h2>
<button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
</div>
<div class="swal2-content">
<div id="swal2-content" class="swal2-html-container" style="display: block;">
{{ $page.props.flash.success }}
</div>

</div>
<div class="swal2-actions">
<button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(30, 224, 172); border-right-color: rgb(30, 224, 172);" @click="success=false">OK</button>

</div>
</div>
</div>




  </landing-layout>
  </template>
  <script>
  import LandingLayout from '../Layouts/LandingLayout.vue';
  import BannerComponent from '../components/BannerComponent.vue';
  import { Inertia } from '@inertiajs/inertia';
  import LinkPointerComponent from '../components/LinkPointerComponent.vue';

  export default {
  components: {
  LandingLayout,
  BannerComponent,
  LinkPointerComponent

  },

  data(){return{

success:false,

  tab:[
  {title:'Emission Tracking',description:'Managing your carbon emissions helps protect the environment and builds a sustainable future.'},
  {title:'Carbon Markets',description:'investing in carbon credits can offset your carbon footprint and support projects that reduce emissions and protect the environment.'},
  {title:'Project Development',description:'Partner with us to develop projects that reduce emissions, benefit communities, and create a greener future.'},
  {title:'Carbon Fund',description:'Save, borrow, and fund for a sustainable future! Your actions can power eco-friendly projects, reduce emissions, and uplift communities.'},
  ],

  //links
  links:[
  {name:'Carbon Emissions in Uganda',url:'emissions.uganda'},
  {name:'Buy or Sell Carbon Credit',url:'emissions.uganda'},
  {name:'Become a project developer',url:'emissions.uganda'},
  {name:'News and Updates',url:'emissions.uganda'},
  {name:'Community Connections',url:'emissions.uganda'},
  {name:'See Our Partners',url:'emissions.uganda'},



  ],

  stepper:[
  {title:'Measure and Assess Your Carbon Emissions'},
  {title:'Set Your Carbon Emission Reduction Target'},
  {title:'Implement Your Carbon Reduction Strategies'},
  {title:'Offset Your Carbon Emissions'},
  {title:'Monitor and Report Your Progress'},

    ],



//form
form:this.$inertia.form({
email:''
}),


  }},




methods:{
//email subscription
email_subscription(){
this.success=false;
this.form.post(route('subscription.email'),{
onSuccess:()=>{
this.success=true;
this.form.reset();
}
});






}




},











  computed:{
  url(){
  return this.$page.props.system.url;
  }
  },





  }
  </script>
  <style scoped>
  .cover{
  background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
  background-size: cover;
  background-position: 100% 100%;
  margin:0;

  }
  ul li{
  margin-bottom:20px;
  }
  ul{
  margin-top:20px;
  }

  ul li p{
  font-size: 18px;
  }
  p{

  }

  .form-control-wrap{
  margin-bottom:10px;
  }
  </style>