<template>
<app-layout :title="title" :subtitle="subtitle">
<template #action>
<Inertia-link class="btn btn-secondary">Carbon Market</Inertia-link>
</template>


<div class="container p-0">
<div class="row mb-3">
<div class="col-12 col-md-4">

<div class="card card-bordered h-100">
<div class="card-inner">
<div class="card-title-group align-start mb-2">
<div class="card-title">
<h6 class="title">Total Emission</h6>
<!-- <p>Shrink your footprint, live greener today.</p> -->
</div>
<div class="card-tools">

</div>
</div>
<div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
<div class="nk-sale-data-group flex-md-nowrap g-4">
<div class="nk-sale-data">
<span class="amount">14,299.59 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
<span class="sub-title">Since Year 2021</span>
</div>

</div>

</div>
</div>
</div>


</div>



<div class="col-12 col-md-8">

<div class="card card-bordered h-100">
<div class="card-inner">
<div class="card-title-group align-start gx-3 mb-3">
<div class="card-title">
<h6 class="title">Emission Trend</h6>
<!-- <p>Track emissions over time and aim for steady reductions.</p> -->
</div>
</div>
<div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
<div class="nk-sale-data">
<span class="amount">$82,944.60</span>
<span class="sub-title">
Latest: 14, November 2024
</span>
</div>
<div class="nk-sale-data">
<Inertia-link class="btn btn-outline-danger"><small>Emission Targets</small></Inertia-link>
</div>
</div>

</div>
</div>


</div>
</div>







<div class="row">
<div class="col-12 col-md-8">




    <div class="card card-bordered card-full">
        <div class="card-inner">
            <div class="card-title-group">
                <div class="card-title">
                    <h6 class="title">Carbon Footprint Summary</h6>
                </div>
                <div class="card-tools">
                    <a href="#" class="link">View All</a>
                </div>
            </div>
        </div>


        <div class="card-inner p-0">



            <table class="table table-hover">
            <thead class="border-0">
                <tr>
                <th scope="col" class="border-0">#</th>
                <th scope="col" class="border-0">First</th>
                <th scope="col" class="border-0">Last</th>
                <th scope="col" class="border-0">Handle</th>
                </tr>
            </thead>
            <tbody class="border-0">
                <tr v-for="(k,key) in 10" :key="key">
                <th scope="row" class="border-0 text-muted">{{ key+1}} </th>
                <td class="border-0 text-muted">Mark</td>
                <td class="border-0 text-muted">Otto</td>
                <td class="border-0 text-muted">@mdo</td>
                </tr>

            </tbody>
            </table>








            </div>





    </div>
















</div>
<div class="col-12 col-md-4">


    <div class="card card-bordered h-100">
        <div class="card-inner ">
            <div class="card-title-group">
                <div class="card-title">
                    <h6 class="title">Reduction Goals</h6>
                </div>
                <div class="card-tools">
                    <a href="#" class="link">View All</a>
                </div>
            </div>
        </div>
        <div class="card-inner">
            <div class="block p-0">
                <el-timeline class="p-0 m-0">
                  <el-timeline-item timestamp="2018/4/12" placement="top">
                      <strong class="text-muted">Update Github template</strong>
                      <p>Tom committed 2018/4/12 20:46</p>
                  </el-timeline-item>
                  <el-timeline-item timestamp="2018/4/3" placement="top">
                    <strong class="text-muted">Update Github template</strong>
                    <p>Tom committed 2018/4/12 20:46</p>
                  </el-timeline-item>
                  <el-timeline-item timestamp="2018/4/2" placement="top">
                    <strong class="text-muted">Update Github template</strong>
                    <p>Tom committed 2018/4/12 20:46</p>
                  </el-timeline-item>
                </el-timeline>
              </div>
        </div>
    </div>

</div>
</div>






<div class="row py-4">
<div class="col-12 col-md-8">

    <div class="card card-bordered h-100">
        <div class="card-inner-group">
            <div class="card-inner card-inner-md border-0">
                <div class="card-title-group">
                    <div class="card-title">
                        <h6 class="title pt-2">
                            Impactful Recommendations and Actions
                        </h6>
                    </div>
                    <div class="card-tools mr-n1">

                    </div>
                </div>
            </div><!-- .card-inner -->


            <div class="card-inner border-0" v-for="(s,key) in 3" :key="key">
                <div class="nk-wg-action border-0">
                    <div class="nk-wg-action-content border-0">
                        <em class="icon ni ni-cc-alt-fill"></em>
                        <div class="title">Pending Buy/Sell Orders</div>
                        <p>We have still <strong>40 buy orders</strong> and <strong>12 sell orders</strong>, thats need to review &amp; take necessary action.</p>
                    </div>

                </div>
            </div><!-- .card-inner -->

        </div><!-- .card-inner-group -->
    </div>




</div>




<div class="col-12 col-md-4">

    <div class="card card-bordered h-100">
        <div class="card-inner-group">
            <div class="card-inner card-inner-md border-0">
                <div class="card-title-group">
                    <div class="card-title">
                        <h6 class="title pt-2">
                            Carbon Offset Options
                        </h6>
                    </div>
                    <div class="card-tools mr-n1">

                    </div>
                </div>
            </div><!-- .card-inner -->








                <div class="card-inner card-inner-md border-0" v-for="(s,key) in offsetOptions" :key="key">
                    <div class="user-card">
                        <div class="user-avatar bg-primary-dim">
                            <span>AB</span>
                        </div>
                        <div class="user-info">
                            <span class="lead-text">{{ s.title }} </span>
                            <span class="sub-text">300 Projects available</span>
                        </div>

                    </div>
                </div>





        </div><!-- .card-inner-group -->
    </div>
</div>

</div>




<div class="row">
<div class="col-12">

    <div class="card card-bordered h-100">
        <div class="card-inner-group">
            <div class="card-inner card-inner-md border-0">
                <div class="card-title-group">
                    <div class="card-title">
                        <h6 class="title pt-2">
                            Community and Social Impact
                        </h6>
                    </div>
                    <div class="card-tools mr-n1">

                    </div>
                </div>
            </div><!-- .card-inner -->
<div class="card-inner">
<div class="row">

<div class="col-12 col-md-4">

<div class="card mb-3 p-3 h-100" style="max-width: 540px;">
    <h6 class="text-muted">Subscription</h6>

    <ul class="list-group list-group-flush">
        <li class="list-group-item text-muted" style="border:none" v-for="(s,key) in subscription" :key="key">
      <Inertia-link class="text-muted"> {{ s.title }}</Inertia-link>
        </li>

      </ul>
  </div>


</div>
<div class="col-12 col-md-4">
<div class="card mb-3 p-3 h-100">
<h6 class="text-muted">Learn with Us</h6>

<ul class="list-group list-group-flush">
    <li class="list-group-item text-muted" style="border:none" v-for="(s,key) in topics" :key="key">
  <Inertia-link class="text-muted"> {{ s.title }}</Inertia-link>
    </li>

  </ul>


</div>

</div>

<div class="col-12 col-md-4">
<div class="card mb-3 p-3 h-100">
<h6 class="text-muted">Collective Impact</h6>
<p>Collaboration fuels progress.</p>
<div>
    <b-avatar-group size="2rem">
      <b-avatar></b-avatar>
      <b-avatar></b-avatar>
      <b-avatar></b-avatar>
      <b-avatar></b-avatar>
      <span class="ml-2" style="font-size:18px;">20+</span>
    </b-avatar-group>
  </div>

  <ul class="list-group list-group-flush mt-2">
    <li class="list-group-item  d-flex justify-content-between align-items-center" v-for="(a,key) in 4" :key="key" style="border:none;">
    <a href="" class="text-muted">
        <b-icon icon="caret-right-fill" class="mr-1"></b-icon>
        Name of the project

        <!-- <span class="badge text-bg-primary rounded-pill">14</span> -->


    </a>
    </li>
  </ul>



</div>


</div>


</div>



</div>
</div><!-- .card-inner-group -->
</div>



</div>
</div>



















</div>

</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
export default {
components:{
AppLayout,

},
props:{
response:[],
},

data(){return{
title:'Welcome '+this.$page.props.user.firstname,
subtitle:'Reduce emissions, get carbon credits, and join the climate solution.',
offsetOptions:[
{title:'Purchase Carbon Credit',icon:'',url:''},
{title:'Invest in Impactful Projects',icon:'',url:''},
{title:'Support Local Initiatives',icon:'',url:''},
{title:'Carbon Offset Subscription',icon:'',url:''},
],

subscription:[
{title:'Monitoring and Reporting',icon:'',url:''},
{title:'Partnerships',icon:'',url:''},
{title:'Carbon Credit Verification and Issuance',icon:'',url:''},
{title:'Compliance and Regulatory Support',icon:'',url:''},
{title:'Educational Resources',icon:'',url:''},
{title:'Seminars & Conferences',icon:'',url:''}
],

topics:[
{title:'Carbon Credit',url:''},
{title:'Climate Financing',url:''},
{title:'Carbon Offset',url:''},
{title:'Regilations & Policies',url:''},
{title:'Emission Reduction Projects',url:''},


]




}}
}
</script>