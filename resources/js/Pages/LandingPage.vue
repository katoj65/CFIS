<template>
  <landing-layout>
  <section class="py-5 cover" style="">



    <div class="row mt-5 pt-3">
    <div class="col-12 col-md-8 offset-lg-1 py-3 mt-3">
    <h1 class="display-3 text-center text-lg-start title-font" style="font-size:40px;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
      <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:white; text-shadow: 3px 5px 5px black;">CONTRIBUTE TO <br/>A SUSTAINABLE</span> <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:white;text-shadow: 3px 4px 4px black;"> FUTURE</span>

<div style="margin-top:10px;">
  <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;color:white;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;border:solid 6px black;border-left:0;border-top:0;">NOW!</span>
</div>


      </h1>
      </div>
  </div>
  </section>







<section id="contact" class="bg-green-light" style="border-top:solid 20px white;">
<div class="container section-title" data-aos="fade-up">
<div class="row">
<div class="col-12 col-md-8 offset-lg-2">
<h2 class="text-green">Our Mission</h2>
<p> We’re on an ambitious mission to turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda. Through innovative carbon offset projects and sustainable practices, we aim to create lasting value for Ugandan communities, fostering green growth, resilience, and a thriving environment for future generations. </p>


<div class="row mt-5">
<div class="row mb-3">
<div class="col-12 col-md-6" v-for="(s, key) in services" :key="key">
<div class="card mb-4 p-4 " style="border-radius:10px;border:none;border-bottom:solid 5px #117864;">
<div class=" text-left">
<Inertia-link class="text-left bold" :href="route(s.url)">
  <h5>{{ s.title }}  <b-icon icon="arrow-right"></b-icon></h5> </Inertia-link>
<p class="text-left h-100">
{{ s.description }}
</p>
</div>
</div>
</div>
</div>
</div>

<div class="row mt-4">
<div class="col-12 col-md-3">
<img src="http://localhost/carbon/public/images/antonio_guterres.png" class="img-fluid rounded-start" alt="Antonio Guterres" style="width:150px;">
</div>
<div class="col-12 col-md-9 text-left">
<div class="pt-4">
<h5 class="p-0 m-0 text-green">{{ update.title }} </h5>
<p class="p-0 m-0">
<small class="text-body-secondary" style="font-size:14px;">
{{ update.subtitle }}
</small>
</p>
<p class="text-danger p-0 m-0" style="font-size:16px;">
{{ update.message }}
</p>
</div>
</div>
</div>



<div class="row mt-5 py-5" style="margin-bottom:-60px;">
<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0">
<div style="margin-bottom:10px;">
  <i class="bi bi-people text-green" style="font-size:50px;"></i>
</div>
<small class="text-uppercase  ls-md fw-semibold bold text-green" style="font-size:20px;">Subscribers</small>
<h4 class="mb-0 mt-2 text-green" style="font-size:35px;">{{ response.clients }} </h4>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0">
<div style="margin-bottom:10px;">
  <i class="bi bi-diagram-3 text-green" style="font-size:50px;"></i>
</div>
<small class="text-uppercase  ls-md fw-semibold bold text-green" style="font-size:20px;">Projects</small>
<h4 class="mb-0 mt-2 text-green" style="font-size:35px;">{{ response.projects }} </h4>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0">
  <div style="margin-bottom:10px;">
    <i class="bi bi-person-lines-fill text-green" style="font-size:50px;"></i>
  </div>
<small class="text-uppercase ls-md fw-semibold bold text-green" style="font-size:20px;">
Developers
</small>
<h4 class="mb-0 mt-2 text-green" style="font-size:35px;">{{ response.developers }} </h4>
</div>
</div>
<div class="col-lg-3 col-6">
<div class="text-center mb-5 mb-lg-0">
<div style="margin-bottom:10px;">
  <i class="bi bi-tree text-green" style="font-size:50px;"></i>
</div>
<small class="text-uppercase ls-md fw-semibold bold text-green" style="font-size:20px;">Impact Created</small>
<h4 class="mb-0 mt-2 text-green" style="font-size:35px;">30%</h4>
</div>
</div>
</div>



</div>
</div>
</div>
</section>









    <section id="services" class="services section bg-green-light" style="margin-top:-65px;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-green">Services</h2>
        <p>Empowering Uganda's climate action with carbon tracking and credit services!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6 bg-white" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('carbon.footprint')" class="stretched-link">Measure Carbon Footprint</Inertia-link></h4>
                <p class="description">

                 Start your carbon mitigation journey by accurately measuring your carbon emissions. With real-time monitoring, track and reduce your environmental impact efficiently.
              </p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 bg-white" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('emissions.uganda')" class="stretched-link">Manage Carbon Emissions</Inertia-link></h4>
                <p class="description">
                  Implement comprehensive carbon management strategies to lower emissions, optimize resource use, and meet sustainability goals while boosting operational efficiency.
              </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 bg-white " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('carbon.offestting')" class="stretched-link">Offset Carbon Emissions</Inertia-link></h4>
                <p class="description">
                  Invest in certified carbon offset projects that reduce emissions elsewhere, balancing out your carbon footprint and contributing to global climate action.

                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 bg-white" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('market.overview')" class="stretched-link">Carbon Markets</Inertia-link></h4>
                <p class="description">
                  Tap into carbon markets by buying and selling carbon credits, turning emission reductions into financial value and supporting global climate initiatives.
              </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 bg-white" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('microfinance.overview')" class="stretched-link">
                  Carbon Fund
                </Inertia-link></h4>
                <p class="description">Access funding tailored for climate-friendly projects, empowering local communities to implement low-carbon solutions and green technologies.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 bg-white" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><Inertia-link :href="route('hub')" class="stretched-link">
                  Education Hub
                </Inertia-link></h4>
                <p class="description">
                  Equip yourself and your community with the knowledge needed to tackle climate challenges through an accessible environmental education hub focused on carbon mitigation and sustainability.
              </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>














  <!--testmonial start-->
  <section class="bg-green-dark py-5">
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
          <p class="lead text-white me-xl-6">
              “The longer we delay, the more we will pay. And the higher the cost will be—not just financially, but in human lives, in livelihoods, and in lost opportunities.”
          </p>
      </div>
      <div class="d-flex justify-content-between">
          <div>
              <h5 class="mb-0 text-white">Christine Lagarde</h5>
              <small class="text-white">President of the European Central Bank</small>
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










  <!--Call to action start-->
  <section class="my-lg-7 py-2 bg-green-light">
  <div class="container">
  <div class="row bg-pattern rounded-3 py-lg-7 py-5 g-0">
  <div class="col-md-8 offset-md-2">
  <div class="text-center position-relative z-1 px-5"
  >
  <div class="mb-5">
      <h3 class="h2 text-white-stable mb-3">
      <span class="text-green"> Ready to Take Action?</span>
      </h3>
      <p class="mb-0 text-white-stable">
      Take action today: Measure your carbon footprint, set ambitious goals, and be part of Uganda's climate solution. Together, we can build a sustainable, climate-resilient future for all.
      </p>
  </div>



  <form class="row d-flex justify-content-center mb-6 needs-validation" @submit.prevent="email_subscription">
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
  import LinkPointerComponent from '../components/LinkPointerComponent.vue';


  export default {
  components: {
  LandingLayout,
  BannerComponent,
  LinkPointerComponent,


  },

  props:{
  response:{}
  },




  data(){return{
  icon_directory:this.$page.props.system.icon_directory,
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
  },

  //
  botton_section(){
  return[
  {title:'Measure Carbon',
  description:'Use carbon tracking tools to measure and reduce emissions, making your sustainability goals achievable and verifiable.',
  link:'Calculate Your Emissions',url:'carbon.footprint'},

  {title:'Manage Carbon Emissions',
  description:'Implement comprehensive carbon management strategies to lower emissions, optimize resource use, and meet sustainability goals while boosting operational efficiency.',
  link:'Create Your Carbon reduction Strategy',url:'emission.manage'},

  {title:'Offset Carbon Emissions',
  description:'Invest in certified carbon offset projects that reduce emissions elsewhere, balancing out your carbon footprint and contributing to global climate action.',
  link:'Invest in Carbon Reduction',url:'carbon.offestting'},

  {title:'Carbon Markets',
  description:'Tap into carbon markets by buying and selling carbon credits, turning emission reductions into financial value and supporting global climate initiatives.',
  link:'Get Access to Carbon Markets',url:'market.overview'},

  {title:'Carbon Fund',
  description:'Access funding tailored for climate-friendly projects, empowering local communities to implement low-carbon solutions and green technologies.',
  link:'Finance Your Emission Reduction Plan',url:'microfinance.overview'},

  {title:'Education Hub',
  description:'Equip yourself and your community with the knowledge needed to tackle climate challenges through an accessible environmental education hub focused on carbon mitigation and sustainability.',
  link:'Empower Yourself with Knowledge',url:'hub.welcome'},

  ];

  },

  //services menu
  services(){
  return[
  {title:'Carbon Footprint',
  description:'Track and reduce emissions with real-time carbon management tools and analytics.',
  url:'cfis.overview'
  },
  {title:'Carbon Fund',
  description:'The Carbon Fund invests in verified projects, creating economic and environmental benefits.',
  url:'microfinance.overview'
  },
  {title:'Carbon Markets',
  description:'Verify and trade carbon credits with our comprehensive carbon market services.',
  url:'market.overview'
  },
  {title:'Carbon Offset Projects',
  description:'Every investment counts, reduce emissions and protect the environment today.',
  url:'projects.overview'
  }

  ];
  },



  news(){
  const articles=[];
  let content=this.response.news;
  content.forEach(element => {
  articles.push({
  title:element.title,
  description:element.description.length>130?element.description.substring(0, 130)+'...':element.description,
  id:element.id,
  created_at:element.created_at,
  file:element.file
  });
  });
  return articles;
  },



  update(){
  return this.response.update;
  },



  icons(){
  return this.$page.props.system.icon_directory;
  }




  },





  }
  </script>
  <style scoped>
  .cover{
  background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
  background-size: cover;
  background-position: 100% 50%;
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

  ol li{
  list-style-type:lower-roman;
  }
  </style>