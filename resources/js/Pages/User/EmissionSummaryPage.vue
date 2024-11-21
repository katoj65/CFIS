<template>
<app-layout :title="title" :subtitle="subtitle">
<div class="container">
<div class="row">

<div class="col-12">


    <div class="card card-bordered h-100">
        <div class="card-inner">
            <div class="card-title-group align-start mb-3">
                <div class="card-title">
                    <h6 class="title">Orders Overview</h6>
                    <p>In last 15 days buy and sells overview. <a href="#" class="link link-sm">Detailed Stats</a></p>
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
            <div class="nk-order-ovwg">
                <div class="row g-4 align-end">
                    <div class="col-xxl-8">
                        <div class="nk-order-ovwg-ck"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas class="order-overview-chart chartjs-render-monitor" id="orderOverview" width="1058" height="360" style="display: block; height: 180px; width: 529px;"></canvas>
                        </div>
                    </div><!-- .col -->
                    <div class="col-xxl-4">
                        <div class="row g-4">
                            <div class="col-sm-6 col-xxl-12">
                                <div class="nk-order-ovwg-data buy">
                                    <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                    <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>
                                    <div class="title"><em class="icon ni ni-arrow-down-left"></em> Buy Orders</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-12">
                                <div class="nk-order-ovwg-data sell">
                                    <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                    <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>
                                    <div class="title"><em class="icon ni ni-arrow-up-left"></em> Sell Orders</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div><!-- .nk-order-ovwg -->
        </div><!-- .card-inner -->
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
title:{},
response:[],
},
data(){return{
subtitle:'From conserving electricity to reducing waste, your actions can make a big difference. Start now!',
energy:this.response.energy,





}}
}
</script>