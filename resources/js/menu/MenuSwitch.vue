<template>
<div>


<div class="row">
<div class="col-3">
<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
<li>
<a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
<i class="bi bi-calculator text-white" style="font-size:30px;"></i>
</a>
</li>
<li>
<a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
<i class="bi bi-cloud-fog-fill text-white" style="font-size:30px;"></i>
</a>
</li>
<li>
<a href="#" class="nav-link py-3  rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
<i class="bi bi-tree-fill text-white" style="font-size:30px;"></i>
</a>
</li>
<li>
<a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
<i class="bi bi-bag-fill text-white" style="font-size:30px;"></i>
</a>
</li>
<li>
<a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
<i class="bi bi-backpack3-fill text-white" style="font-size:30px;"></i>
</a>
</li>
<li>
    <a href="#" class="nav-link py-3 rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
    <i class="bi bi-bank2 text-white" style="font-size:30px;"></i>
    </a>
    </li>
</ul>


</div>
<div class="col-9">

<ul class="nav nav-pills flex-column mb-auto">
<li class="nav-item">
<a href="#" class="nav-link text-white">
    Home
</a>
</li>
<li>
<a href="#" class="nav-link text-white">
Dashboard
</a>
</li>
<li>
<a href="#" class="nav-link text-white">
Orders
</a>
</li>
<li>
<a href="#" class="nav-link text-white">
Products
</a>
</li>
<li>
<a href="#" class="nav-link text-white">
Customers
</a>
</li>
</ul>
</div>
</div>








<!-- <div v-if="userProfile!=null">
<user-menu v-if="userRole=='user'"/>
<admin-menu v-if="userRole=='admin'"/>
</div>
<div v-else>
</div> -->






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