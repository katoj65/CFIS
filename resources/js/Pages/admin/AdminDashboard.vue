<template>
<div>
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

<div class="card">
        <div class="card-inner">
            <div class="card-title-group align-start mb-3">
                <div class="card-title">
                    <h6 class="title">User Activities</h6>
                    <p>In last 30 days <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Referral Informations"></em></p>
                </div>
                <div class="card-tools mt-n1 mr-n1">
                    <div class="drodown">
                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="link-list-opt no-bdr">
                                <li><a href="#"><span>15 Days</span></a></li>
                                <li><a href="#" class="active"><span>30 Days</span></a></li>
                                <li><a href="#"><span>3 Months</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-activity-group g-4">
                <div class="user-activity">
                    <em class="icon ni ni-users"></em>
                    <div class="info">
                        <span class="amount">345</span>
                        <span class="title">Direct Join</span>
                    </div>
                    <div class="gfx" data-color="#9cabff" style="color: rgb(156, 171, 255);">
                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"></path>
                        </svg>
                    </div>
                </div>
                <div class="user-activity">
                    <em class="icon ni ni-users"></em>
                    <div class="info">
                        <span class="amount">49</span>
                        <span class="title">Referral Join</span>
                    </div>
                    <div class="gfx" data-color="#ccd4ff" style="color: rgb(204, 212, 255);">
                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


</div>


    </div>




</div>














        </div>

</template>
<script>
export default {
data(){return{
gases:[
{name:'Carbon Dioxide',anount:'16,956.63',sub_title:'CO2',measurement:'M'},
{name:'Methane',anount:'12,954.60',sub_title:'CH4',measurement:'M'},
{name:'Nitrous Oxide',anount:'10,000.78',sub_title:'N2O',measurement:'M'},
{name:'Hydrofluorocarbon',anount:'60,954.60',sub_title:'HFC',measurement:'M'}


],





}},

computed:{
emissions(){
return this.$page.props.gas_emission;
}



}




}
</script>

<style scoped>
table thead tr th{border: none;}
table thead tr{border: none;}
table thead{border: none;}

</style>