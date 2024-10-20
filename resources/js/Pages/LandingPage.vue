<template>
  <landing-layout>

  <!--Hero start-->
  <section class="bg-primary-dark right-slant-shape py-5" data-cue="fadeIn">
  <div class="container py-5">
  <div class="row align-items-center">
  <div class="col-lg-6 col-12">
  <div class="text-center text-lg-start mb-3 mb-lg-0" data-cues="slideInDown">
  <div class="mb-4">
  <h1 class="display-3 text-center text-lg-start title-font" style="font-size:50px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
  <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">CONTRIBUTE TO A SUSTAINABLE</span> <br/><span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> FUTURE</span> <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;color:white;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">NOW!</span>
  </h1>
  <p class="mb-0 text-white-stable lead">
  We’re on an ambitious mission to turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda.</p>
  </div>
  <div data-cues="slideInDown">
  <Inertia-link :href="route('about')" class="btn btn-outline-danger" style="border-radius:0;">Get to Know Us <i class="bi bi-arrow-right"></i></Inertia-link>
  </div>
  </div>
  </div>





  <div class="offset-lg-1 col-lg-5 col-12">
  <div class="position-relative z-1" data-cue="slideInRight">
  <div class="position-relative">



  <div class="row mt-5">
  <div class="col-12 col-md-4 mt-5">
  <img src="http://localhost/carbon/public/images/antonio_guterres.png">
  </div>
  <div class="col-12 col-md-4">

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




  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <!--Hero start-->




  <section class="bg-light py-5 m-0">
  <div class="container">
      <!-- Heading -->
      <div class="w-lg-65 text-center mx-lg-auto mb-3">
        <h3 class="display-8 mb-3">URGENT CALL FOR ACTION</h3>
        <p  style="font-size:17px;" class="text-dark">

         <i> It's time to unite and reduce emissions, protect ecosystems, and invest in sustainable solutions.</i>

      </p>
      </div>
      <!-- End Heading -->

      <div class="row  mb-md-0 mt-5">

  <div class="col-sm-6 col-lg-3" v-for="(t,key) in tab" :key="key">
  <!-- Card -->
  <div class="card card-lg h-100 border-0 p-4" style="border-radius:25px;">
  <div class="card-header bg-white position-relative overflow-hidden border-0">

  <h5 class="card-title m-0">
  <span class="font-times">
  {{ t.title }}
  </span>
  </h5>
  </div>
  <div class="card-body">
  <p class="card-text">
      {{ t.description }}
  </p>
  </div>


  </div>
  <!-- End Card -->
  </div>
        <!-- End Col -->
  </div>
      <!-- End Row -->
  </div>
  </section>










  <section class="bg-primary-alt has-divider py-5">
      <div class="container pb-0">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-xl-8 col-lg-9">
            <h2 class="display-8 mx-xl-6 mb-4">A PATHWAY TO CARBON NEUTRALITY</h2>
            <p>
              The Uganda Carbon Registry is at the heart of Uganda’s transition to a low-carbon economy. As a platform for carbon mitigation, the registry facilitates measuring and tracking carbon emissions, generating, verifying, and trading carbon credits, providing access to carbon microfinance services, and supporting the country’s National Determination Contributions (NDCs).
            </p>
          </div>
        </div>
        <div class="row justify-content-center text-center py-5">
          <div class="col-md-4 mb-3 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <span class="display-4 text-primary-2 d-block" data-countup="" data-start="1" data-end="4.89" data-duration="3" data-grouping="true" data-suffix="/5" data-decimal-places="2">2000+</span>
            <span class="h6">Available Projects</span>
          </div>
          <div class="col-md-4 mb-3 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <span class="display-4 text-primary-2 d-block" data-countup="" data-start="100000" data-end="200000" data-duration="3" data-grouping="true" data-suffix="+">600+</span>
            <span class="h6">Project Developers </span>
          </div>
          <div class="col-md-4 mb-3 mb-4 mb-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <span class="display-4 text-primary-2 d-block" data-countup="" data-start="1000000" data-end="2394421" data-duration="3" data-grouping="true">2,394</span>
            <span class="h6">Clients</span>
          </div>
        </div>

      </div>

    </section>
















    <section class="bg-light text-light py-3">
      <div class="container pb-md-6">
        <!-- <div class="row mb-4">
          <div class="col">
            <h2 class="h1">Premium Features</h2>
          </div>
        </div> -->
        <div class="row mt-4">
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="100">
            <div class="ml-3">
              <h5><span class="font-times bold"> Measure Your Carbon Footprint</span> </h5>
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
              <h5><span class="font-times bold">Carbon Management for Sustainability</span> </h5>
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
              <h5><span class="font-times bold">Offset Your Carbon Emissions</span> </h5>
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
              <h5><span class="font-times bold">Buy and Sell Carbon Credits</span> </h5>
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
              <h5><span class="font-times bold">Microfinance for Climate Action</span> </h5>
              <p>
                  Access microfinance services tailored for climate-friendly projects, empowering local communities to implement low-carbon solutions and green technologies.
              </p>
              <div>
                  <Inertia-link href="" class="btn btn-clear text-danger p-0">Finance Your Emission Reduction Plan <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
          <div class="col-md-4 d-flex mb-4 aos-init aos-animate p-4" data-aos="fade-up" data-aos-delay="600">

            <div class="ml-3">
              <h5><span class="font-times bold">Environmental Education Hub</span> </h5>
              <p>
                  Equip yourself and your community with the knowledge needed to tackle climate challenges through an accessible environmental education hub focused on carbon mitigation and sustainability.
              </p>
              <div>
                  <Inertia-link :href="route('news.index')" class="btn btn-clear text-danger p-0">Empower yourself with knowledge <i class="bi bi-arrow-right"></i></Inertia-link>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>







    <section class=" py-5 shadow-sm">
      <div class="container ">
         <div class="col-xxl-9 offset-xxl-2 col-md-12">
            <div class="row align-items-center">
               <!-- <div class="col-md-4">
                  <div class="mb-5 mb-lg-0">
                     <img src="http://localhost/carbon/public/images/deforestation.jpeg
  " alt="textmonial" class="img-fluid rounded-3">
                  </div>
               </div> -->
               <div class="col-md-10">
                  <div class="mb-4">
                     <p class="lead me-xl-6" style="font-weight:20px;color:#922b21 ;"><i>
                    “The strongest governments on earth cannot clean up pollution by themselves. They must rely on
                    each ordinary person, like you and me, on our choices, and on our will.”</i> </p>
                  </div>
                  <div class="d-flex justify-content-between">
                     <div>
                        <h5 class="mb-0">Chai Jing</h5>
                        <small>Journalist and author</small>
                     </div>
                     <div>
                        <!-- <figure>
                           <img src="" alt="brand">
                        </figure> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>





<!-- 
  <section class="section bg-light py-5" >
  <div class="section-content container p-sm-5">
  <div class="row">
  <div class="col-12 col-md-5 pr-5">
  <h3 class="display-8">
 LATEST UPDATES </h3>
  <p>
  The climate crisis has never been more urgent, and with every new headline,
  the impacts on our planet and our future become clearer.
  </p>


  <ul class="nk-activity p-0 mt-5">
  <li class="nk-activity-item border-0 p-0" v-for="(s,key) in 3" :key="key">
  <div class="nk-activity-media user-avatar bg-warning">
  <b-icon icon="list-ul"></b-icon>
  </div>
  <div class="nk-activity-data">
  <div class="label text-dark" style="font-size:14px;">
  <b>Climate Crisis  <b-icon icon="play-fill"></b-icon></b>
      2024 is set to be one of the hottest years on record, with rising temperatures the hottest...</div>
  <span class="time">2 hours ago</span>
  </div>
  </li>
  <li class="text-center">
  <Inertia-link class="btn p-0 btn-clear text-danger" :href="route('news.index')">More news and updates <i class="bi bi-arrow-right"></i> </Inertia-link>
  </li>
  </ul>










  </div>
  <div class="col-12 col-md-7">
  <div class="row">
  <div class="col-12 col-md-6 p-2 mb-3" v-for="(n,key) in 2" :key="key">
      <div class="card border-0 shadow-sm p-2" href="#" data-aos="fade-up" style="border-bottom:50px;">
          <img class="card-img" src="http://localhost/carbon/public/images/deforestation.jpeg
  " alt="Image Description" style="border-radius:0;">
          <div class="card-body">
            <span class="card-subtitle text-body text-muted">Read the blog</span>
            <h4 class="card-title text-inherit">Have a meaningful impact</h4>
            <p class="card-text text-body">Opportunities to Front who have proven to be good at executing on them.</p>
          </div>
          <div class="card-footer pt-0 border-0 bg-white">
              <a class="card-link" href="./page-customer-story.html">Read story <i class="bi-chevron-right small ms-1"></i></a>
            </div>
      </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
 -->





  </landing-layout>
  </template>
  <script>
  import LandingLayout from '../Layouts/LandingLayout.vue';

  export default {
  components: {
  LandingLayout,

  },

  data(){return{
  tab:[
  {title:'Emission Tracking',description:'Managing your carbon emissions helps protect the environment and builds a sustainable future.'},
  {title:'Carbon Markets',description:'investing in carbon credits can offset your carbon footprint and support projects that reduce emissions and protect the environment.'},
  {title:'Project Development',description:'Partner with us to develop projects that reduce emissions, benefit communities, and create a greener future.'},
  {title:'Microfinance Services',description:'Save, borrow, and fund for a sustainable future! Your actions can power eco-friendly projects, reduce emissions, and uplift communities.'},
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
{title:'Measure and Assess Your Carbon Emissions.'},
{title:'Set Your Carbon Emission Reduction Target.'},
{title:'Implement Your Carbon Reduction Strategies.'},
{title:'Offset Your Carbon Emissions, Monitor and Report Progress.'},
{title:'Monitor and Report Your Progress.'},

  ],




  }},


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
  .p-stepper{
font-size:20px;
padding:10px;
margin-top:10px;
  }
  </style>