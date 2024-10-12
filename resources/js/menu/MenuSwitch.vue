<template>
<div>

<div v-if="userProfile!=null">
<user-menu v-if="userRole=='user'"/>
<admin-menu v-if="userRole=='admin'"/>
</div>
<div v-else>
</div>
</div>
</template>
<script>
import AdminMenu from './AdminMenu.vue';
import UserMenu from './UserMenu.vue';
export default {
components:{
UserMenu,
AdminMenu,
},
data(){return{


}},



computed:{
userRole(){
const role=this.$page.props.auth.user.role;
return role;
},
userProfile(){
const profile=this.$page.props.auth.profile;
return profile;
}



}


}
</script>