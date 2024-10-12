<template>
<div>

<create-profile v-if="profile==null"/>
<div v-else>
<admin-dashboard v-if="role=='admin'"/>

</div>


</div>
</template>
<script>
import CreateProfile from '../forms/CreateProfile.vue';
import AdminDashboard from '../Pages/admin/AdminDashboard.vue';

export default {
components:{
CreateProfile,
AdminDashboard
},

props:{
gas_emission:[]
},

data(){return{

}},

computed:{
profile(){
return this.$page.props.auth.profile;
},
role(){
return this.$page.props.auth.user.role;
}



}







}
</script>