<template>
    <landing-layout>

    <section class="hero-section p-0" style="margin-bottom:0;z-index:0;">
    <div class="container-fluid p-0">
    <div class="row p-0">
    <div class="col-lg-12 col-12 p-0">
    <div>
    <div>
    <div class="cover" style="padding-left:100px;">
    <h1 style="position:absolute;color:white;bottom:0;padding:50px;padding-bottom:100px; font-size:45px;text-shadow:10px 10px 10px black;line-height:55px;word-spacing:12px;letter-spacing:0px;font-weight:bolder;">
    CONTRIBUTE <br/>TO A SUSTAINABLE<br/>
    <span>FUTURE</span> <span style="background:red;text-shadow:none;padding-left:25px;padding-right:25px;">Now!</span>
    </h1>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </section>


    <section id="testimonials p-0 m-0" class="ud-testimonials" style="margin-top:-50px;">
        <div class="container p-0">
          <div class="row p-0">
            <div class="col-lg-12">
              <div class="ud-section-title mx-auto text-center">
                <span class="text-danger">About Us</span>
                <h3 class="text-dark">Our  Call for Climate Action</h3>
                <p style="font-size:16px;">
                    Uganda Carbon Registry is committed to empowering individuals, businesses,
                    and communities to reduce their carbon footprints and offset greenhouse gas emissions through accessible tools
                    and microfinance solutions.
                </p>
              </div>
            </div>
          </div>







    <div class="row pb-5">


    <div class="col-lg-4 col-md-6" v-for="(t,key) in carbonManagement" :key="key">
    <div class="ud-single-testimonial wow fadeInUp" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;height:300px;">
    <div class="ud-testimonial-ratings">
    <!-- <p class="text-dark" style="font-size:20px;font-weight:bolder;"> {{ t.title }} </p> -->
    </div>
    <div class="ud-testimonial-content">

    <p>
    {{ t.description }}
    </p>
    </div>
    </div>
    </div>


    </div>
    </div>
    </section>






    <section class="pb-0 bg-white">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-md-6 mb-3 mb-md-0">
              <h3 class="h3 text-dark mb-4">What We Do</h3>
              <p>We support a wide range of climate action initiatives, from renewable energy projects to reforestation, agroforestry, and sustainable land management. We ensure that emissions reduction projects in Uganda are accurately measured, verified, and certified according to international standards.</p>





              <div class="row col-sm-divider">
                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">45k+</h2>
                    <p class="mb-0">clients from freelancers to corporate companies</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">8m+</h2>
                    <p class="mb-0">years of experience in this business already</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->

                <div class="col-sm-4">
                  <!-- Info -->
                  <div class="text-center p-3">
                    <h2 class="text-primary">12k+</h2>
                    <p class="mb-0">resolved all kinds of questions and inquiries</p>
                  </div>
                  <!-- End Info -->
                </div>
                <!-- End Col -->
              </div>








            </div>


    <div class="col-md-5">
    <div class="card card-body bg-dark p-sm-5">
    <!-- Quote icon -->
    <span class="display-5 text-primary"><i class="bi bi-quote"></i></span>
    <h3 class="text-white">Our Mission</h3>
    <p class="text-white fs-6">To turn carbon emissions into economic opportunities that benefit both the environment and the people of Uganda.
    <br/>
    We believe that carbon markets can drive positive change by incentivizing emissions reductions, protecting natural ecosystems, and empowering communities to take ownership of climate action.</p>
    <!-- Star -->
    <ul class="list-inline mb-0">
    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
    <li class="list-inline-item me-0"><i class="bi bi-star-fill text-white fs-6"></i></li>
    </ul>


    </div>


    </div>
    </div>
    </div>
    </section>








    <section id="pricing" class="ud-pricing bg-light py-5">
        <div class="container py-0">
          <div class="row py-0">
            <div class="col-lg-12">
              <div class="ud-section-title mx-auto text-center">
                <h3 class="text-dark">Our Pricing Plans</h3>
                <p>
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
                </p>
              </div>
            </div>
          </div>

          <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div class="ud-single-pricing first-item wow fadeInUp border-0" data-wow-delay=".15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 19.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div class="ud-single-pricing bg-dark wow fadeInUp border-0" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <span class="ud-popular-tag">POPULAR</span>
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 30.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-white-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
              <div class="ud-single-pricing last-item wow fadeInUp border-0" data-wow-delay=".15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                <div class="ud-pricing-header">
                  <h3>STARTING FROM</h3>
                  <h4>$ 70.99/mo</h4>
                </div>
                <div class="ud-pricing-body">
                  <ul>
                    <li>5 User</li>
                    <li>All UI components</li>
                    <li>Lifetime access</li>
                    <li>Free updates</li>
                    <li>Use on 1 (one) project</li>
                    <li>4 Months support</li>
                  </ul>
                </div>
                <div class="ud-pricing-footer">
                  <a href="javascript:void(0)" class="ud-main-btn ud-border-btn">
                    Purchase Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>









    <!--Testimonial start-->
    <!-- <section class="py-lg-9 py-5 bg-primary-blend-gradient text-dark">
        <div class="container">
            <div class="row align-items-center mb-lg-7 mb-5">
                <div class="col-xl-6 col-lg-5 col-md-12">
                    <div class="mb-4 mb-lg-0 text-center text-lg-start">
                        <small class="text-uppercase ls-md fw-semibold">TESTIMONIAL</small>
                        <h2 class="mt-4">
                            I am proud of
                            <span class="text-primary">my results</span>
                        </h2>
                        <p class="mb-0">I bring solutions to make life easier for our customers.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="text-center text-lg-start">
                                <h2 class="mb-1">236</h2>
                                <span>Awards Won</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center text-lg-start">
                                <h2 class="mb-1">200+</h2>
                                <span>Completed Projects</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center text-lg-start">
                                <h2 class="mb-1">10Y</h2>
                                <span>Customer Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <p class="mb-4">“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                            <h5 class="mb-0">Jitu Chauhan</h5>
                            <small>Creative Director - Design agency</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <p class="mb-4">“Dolorum et ut quod quia laborum quis quam oluptas numquam delectus nihil ultrices diam ut enim doloremque et ipsam.”</p>
                            <h5 class="mb-0">Anita Parmar</h5>
                            <small>Sales Specialist</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <p class="mb-4">“Suspendisse facilisis leo at sapien finibus rutrum. Vivamus consectetur viverra erat. Nullam pretium mauris quis ultricies ultrices.”</p>
                            <h5 class="mb-0">Sandeep Chauhan</h5>
                            <small>Marketing Specialist</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <p class="mb-4">“Phasellus dapibus nibh eu libero pharetra, interdum accu msan nunc purus ferm entum sagittis vestibulum nanatibus et magnis.”</p>
                            <h5 class="mb-0">Manasvi Suthar</h5>
                            <small>Creative Art Director</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--Testimonial end-->


    <!--success stories-->
    <!-- <section class="py-xl-9 py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-md-8 offset-md-2">
                    <div class="text-center mx-xl-7 mb-5">
                        <h2 class="mb-3">Read the real-life success stories of
                            the companies and industries.</h2>
                        <a href="#!"
                            class="icon-link icon-link-hover fw-semicold">
                            Browse all customer stories
                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap pb-5 me-5 me-lg-0">
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-sm h-100 bg-dark">
                            <div class="card-body p-lg-5">
                                <figure class="mb-5">
                                    <img src="http://localhost/carbon/public/images/deforestation.jpeg"
                                        alt="logo" />
                                </figure>
                                <p class="mb-0">
                                    “Lorem ipsum dolor sit amet cons ectetur
                                    adipiscing elit uisque sagittis risus sed
                                    dolor lobortis, non rutrum massa ultricies
                                    aecenas tempor, nisi nec
                                    tempus lobortis”
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-sm h-100 bg-dark">
                            <div class="card-body p-lg-5">
                                <figure class="mb-5">
                                    <img src="http://localhost/carbon/public/images/deforestation.jpeg"
                                        alt="logo" />
                                </figure>
                                <p class="mb-0">
                                    “Aenean pharetra finibus mauris a porttitor.
                                    Nam dui tortor, finibus sit amet feugiat
                                    porta, tempus in odio. Interdum et malesuada
                                    fames ac ante ipsum
                                    primis in faucibus.”
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow-sm h-100 bg-dark">
                            <div class="card-body p-lg-5">
                                <figure class="mb-5">
                                    <img src="http://localhost/carbon/public/images/deforestation.jpeg"
                                        alt="logo" />
                                </figure>
                                <p class="mb-0">“Pellentesque sit amet turpis
                                    porta augue pretium dictum. Pellentesque
                                    commodo bitur ut massa cursus, congue augue
                                    vitae, efficitur metus.”</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--success stories-->









    </landing-layout>
    </template>

    <script>
    import LandingLayout from '../Layouts/LandingLayout.vue';
    export default {
    components:{
    LandingLayout
    },
    props:{
    emission_report:[],
    emission_source:[],

    },



    data(){return{
    //the I effect
    list_of_impact:[
    {title:'Integrity',
    desc:"Integrity is not just a value we uphold, it’s a call to action for our partners, donors, and supporters. Together, we can create a more transparent, accountable, and sustainable world.",
    image:'sustainability.jpeg'
    },

    {title:'Impact',
    desc:'Reaching net zero in Uganda is a collective responsibility that involves the government, businesses, civil society, and individuals.',
    image:'deforestation_uganda.jpg'
    },

    {title:'Innovation',
    desc:'Reaching net zero in Uganda is a collective responsibility that involves the government, businesses, civil society, and individuals.',
    image:'solar.jpg'
    },








    ],

    //why carbon management matters
    carbonManagement:[
    {title:'Mitigating climate change impacts',
    description:'Uganda is highly vulnerable to climate change, with frequent droughts, floods, and erratic rainfall affecting agriculture, food security, and water resources. '},
    {title:'Protecting biodiversity and natural resources',
    description:'Uganda is home to unique biodiversity and rich natural resources, including forests, wetlands, and wildlife. '},
    {title:'Supporting sustainable development',
    description:'Effective carbon management encourages investment in renewable energy, sustainable agriculture, and green infrastructure. These initiatives reduce emissions, create jobs, and boost economic growth while supporting Uganda’s transition to a low-carbon economy.'},

    ],








    }},


    computed:{
    url(){
    return this.$page.props.system.url+'public/images/';
    },

    icon_url(){
    return this.$page.props.system.url;
    }

    }


    }
    </script>
    <style scoped>



    .cover{
    background-image: url('http://localhost/carbon/public/images/deforestation.jpeg');
    height: 550px;
    background-size: cover;
    background-position: 100% 40%;
    margin:0;

    }
    .emission_description{
    font-size:25px;
    font-weight:bolder
    }
    .pollution_option{
    padding-bottom:25px;
    }
    .pollution_icon{
    width:70px;

    }
    .align-left{
    text-align: left;
    }
    .increase-font p{
    font-size:18px;
    }

    .featured-block{
    padding:0;

    }
    .featured-block-text{
    color:#138D75;
    }

    .emission_amount{
    font-size:18px;
    }

    .menu1{
    padding: 0;
    margin:0;
    margin-top:30px;
    }

    .menu1 li{
    margin-top:10px;
    }
    .fadeIn{

    border-radius:10px;
    }
    #stat{
    margin-bottom:10px;
    margin-top:10px;
    }
    </style>