<template>
<landing-layout>




<!--Hero start-->
<section class="bg-primary-dark right-slant-shape py-5" data-cue="fadeIn">
    <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                       <div class="text-center text-lg-start mb-7 mb-lg-0" data-cues="slideInDown">
                            <div class="mb-4">
                                   <h1 class="mb-5 display-5 text-white-stable">
                                        Meet the next gen
                                        <span class="text-pattern-line text-warning">banking service</span>
                                   </h1>
                                   <p class="mb-0 text-white-stable lead">Enim sed parturient sem enim nunc sit erat velit eget hac nulla nullam et id praesent nisi ornare risus risus consequat.</p>
                            </div>
                            <div data-cues="slideInDown">
                                   <a href="#" class="btn btn-primary me-2">Get Started</a>
                                   <a href="#" class="btn btn-outline-warning">Contact Sales</a>
                            </div>
                       </div>
                </div>
                <div class="offset-lg-1 col-lg-6 col-12">
                       <div class="position-relative z-1" data-cue="slideInRight">
                            <div class="position-relative">


                            </div>
                       </div>
                </div>
           </div>
    </div>
</section>
<!--Hero start-->











<!--Testimonial start-->
<section class="py-lg-9 py-5 bg-light text-dark">
    <div class="container">
        <div class="row align-items-center mb-lg-7 mb-5">
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="mb-4 mb-lg-0 text-center text-lg-start">
               
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
</section>
<!--Testimonial end-->






</landing-layout>
</template>
<script>
import LandingLayout from '../Layouts/LandingLayout.vue';

export default {
components: {
LandingLayout,

},

data(){return{
isLoading:false,
//form
form:this.$inertia.form({
names:null,
email:null,
subject:null,
message:null
}),




}},


computed:{
url(){
return this.$page.props.system.url;
}
},
methods:{
submit(){
this.isLoading=true;
this.form.post(this.route('contact.store'),{
onFinish:()=>{
this.isLoading=false;

}
});


}




}





}
</script>
<style scoped>

.form-control{
 border-radius:0;
 padding:20px;
 margin-bottom:5px;
 border-radius: 5px;
 margin-top:15px;
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
    font-size: 18px;
}

.form-control-wrap{
margin-bottom:10px;
}
</style>