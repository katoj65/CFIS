    <template>
    <app-layout :title="title" :subtitle="subtitle">

    <section>
    <div class="row">

    <div class="col-12 col-md-4 mb-4">


    <div class="card card-bordered h-100">
    <div class="card-inner">
    <div class="team">

    <div class="user-card user-card-s2">
    <div class="user-avatar lg bg-success">
    <b-icon icon="person-fill" aria-hidden="true"></b-icon>
    <div class="status dot dot-lg dot-success"></div>
    </div>
    <div class="user-info">
    <h6 style="text-transform:capitalize;">{{ user.firstname }} {{ user.lastname }} </h6>
    <span class="sub-text text-uppercase">
    <b-icon icon="shield-fill" aria-hidden="true" class="mr-1"></b-icon> {{ user.role }}
    </span>
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
    <div class="col-12 col-md-8 mb-4">


    <div class="card card-bordered h-100" style="min-height:500px;">
    <div class="card-inner">
    <el-tabs type="">
    <el-tab-pane>
    <span slot="label">
    <b-icon icon="person-fill" aria-hidden="true" style="position:absolute;"></b-icon>
    <span class="ml-3">Create Personal Profile</span>
    </span>

    <div class="p-4">
    <h6>Personal profile information</h6>
    <create-user-profile/>
    </div>

    </el-tab-pane>
    <el-tab-pane>
    <span slot="label">
    <b-icon icon="building" aria-hidden="true" style="position:absolute;"></b-icon>
    <span class="ml-3">Create Business/Organisation Profile</span>
    </span>

<div class="p-4">
<h6>Business profile information</h6>
<create-business-profile/>
</div>
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
import CreateUserProfile from '../../forms/CreateUserProfile.vue';
import CreateBusinessProfile from '../../forms/CreateBusinessProfile.vue';
export default {
components:{
AppLayout,
CreateUserProfile,
CreateBusinessProfile

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