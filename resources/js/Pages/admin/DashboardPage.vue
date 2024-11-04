<template>
<app-layout :title="'Welcome Admin'" :subtitle="'Drive real change with carbon accountability.'">
<template #action>
<Inertia-link class="btn btn-secondary" :href="route('home')">
Carbon Market
</Inertia-link>
</template>



<create-profile v-if="profile==null"/>
<div v-else>
<div class="row">
<div class="col-md-3 col-12 pl-2 pt-0 pr-2 pb-1" v-for="(g,key) in emissions" :key="key">
<div class="nk-order-ovwg-data card  m-0">
<div class="amount">{{ g.amount }}<small class="currenct currency-usd">

</small></div>
<div class="info"><em class="icon ni ni-arrow-long-up" style="color:red;font-size:17px;"></em> {{ g.measurement }} <strong> <span class="currenct currency-usd"></span></strong></div>
<div class="title">


<b-icon icon="cloud-haze" aria-hidden="true" class="icon ni"></b-icon>

{{ g.name }} </div>
</div>
</div>

</div>


<div class="row mt-3">
<div class="col-12 col-md-8">



<div class="card card-bordered card-full">
<div class="card-inner" style="border:none;">
<div class="card-title-group" style="border:none;">
<div class="card-title ">
    <h6 class="title"><span class="mr-2">Orders Activities</span></h6>
</div>
<div class="card-tools">
    <ul class="card-tools-nav">
        <li><a href="#"><span>Buy</span></a></li>
        <li><a href="#"><span>Sell</span></a></li>
        <li class="active"><a href="#"><span>All</span></a></li>
    </ul>
</div>
</div>
</div><!-- .card-inner -->
<div class="card-inner p-0">



<table class="table table-hover">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
    </tr>
</thead>
<tbody>
    <tr v-for="(k,key) in 50" :key="key">
    <th scope="row">{{ key }} </th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
    </tr>

</tbody>
</table>








</div><!-- .card-inner -->
<div class="card-inner-sm border-top text-center d-sm-none">
<a href="#" class="btn btn-link btn-block">See History</a>
</div><!-- .card-inner -->
</div>








</div>
















<div class="col-12 col-md-4">

<div class="card card-bordered card-full">
<div class="card-inner">
<div class="card-title-group align-start mb-2">
<div class="card-title">
    <h6 class="title">Top Coin in Orders</h6>
    <p>In last 15 days buy and sells overview.</p>
</div>
<div class="card-tools mt-n1 mr-n1">
    <div class="drodown">
        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <ul class="link-list-opt no-bdr">
                <li><a href="#" class="active"><span>15 Days</span></a></li>
                <li><a href="#"><span>30 Days</span></a></li>
                <li><a href="#"><span>3 Months</span></a></li>
            </ul>
        </div>
    </div>
</div>
</div><!-- .card-title-group -->
<div class="nk-coin-ovwg">
<div class="nk-coin-ovwg-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="coin-overview-chart chartjs-render-monitor" id="coinOverview" width="906" height="330" style="display: block; height: 165px; width: 453px;"></canvas>
</div>
<ul class="nk-coin-ovwg-legends">
    <li><span class="dot dot-lg sq" data-bg="#f98c45" style="background: rgb(249, 140, 69);"></span><span>Bitcoin</span></li>
    <li><span class="dot dot-lg sq" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></span><span>Ethereum</span></li>
    <li><span class="dot dot-lg sq" data-bg="#8feac5" style="background: rgb(143, 234, 197);"></span><span>NioCoin</span></li>
    <li><span class="dot dot-lg sq" data-bg="#6b79c8" style="background: rgb(107, 121, 200);"></span><span>Litecoin</span></li>
    <li><span class="dot dot-lg sq" data-bg="#79f1dc" style="background: rgb(121, 241, 220);"></span><span>Bitcoin Cash</span></li>
</ul>
</div><!-- .nk-coin-ovwg -->
</div><!-- .card-inner -->
</div>



</div>




</div>














</div>

</app-layout>
</template>

<script>
import CreateProfile from '../../forms/CreateProfile.vue';
import AppLayout from '../../Layouts/AppLayout.vue';


export default {
components:{
AppLayout,
CreateProfile,



},

props:{

},

data(){return{




}},

computed:{
profile(){
return this.$page.props.auth.profile;
},
emissions(){
return this.$page.props.response.gas_emission;
}



}



}
</script>