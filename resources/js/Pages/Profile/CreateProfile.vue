<template>
<app-layout :title="title" :subtitle="subtitle">

<section>
<div class="row">

<div class="col-12 col-md-4 mb-4">


    <div class="card card-bordered h-100">
        <div class="card-inner">
            <div class="team">

                <div class="user-card user-card-s2">
                    <div class="user-avatar lg bg-primary">
                        <img src="" alt="">
                        <div class="status dot dot-lg dot-success"></div>
                    </div>
                    <div class="user-info">
                        <h6>{{ user.firstname }} {{ user.lastname }} </h6>
                        <span class="sub-text">UI/UX Designer</span>
                    </div>
                </div>
                <ul class="team-info">
                    <li><span>Join Date</span><span>
                        {{ user.created_at }}
                    </span></li>
                    <!-- <li><span>Contact</span><span>
                    {{ user.tel }}
                    </span></li> -->
                    <li><span>Email</span><span>
                    {{ user.email }}
                    </span></li>
                </ul>
                <div class="team-view">
                    <a href="html/user-details-regular.html" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                </div>
            </div><!-- .team -->
        </div><!-- .card-inner -->
    </div>


</div>
<div class="col-12 col-md-8 mb-5">


<div class="card card-bordered h-100" style="min-height:500px;">
<!-- <div class="card-header bg-white mt-2">
<div class="card-title">
<h6>
Fill in the required information
</h6>
</div>
</div> -->
<div class="card-inner">




    <el-tabs type="">
        <el-tab-pane>
          <span slot="label"><i class="el-icon-date"></i>
Create User Profile
        </span>
User form
        </el-tab-pane>
        <el-tab-pane label="Create Business/Organisation Profile">
Business form
        </el-tab-pane>

      </el-tabs>














</div>
</div>

</div>
</div>
</section>




</app-layout>
</template>
<script>
import AppLayout from '../../Layouts/AppLayout.vue';
export default {
components:{
AppLayout
},
props:{
title:{},
response:[],
},


data(){return{
subtitle:'Help us understand your needs and preferences.',





}},


computed:{
user(){
return this.response.user;
}


}



}
</script>