<template>
<div>






<div class="row">
<div class="col-3">
<ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
<li v-for="(u,key) in user_menu.main" :key="key" :id="'tooltip-button-interactive'+key">
<a href="#" class="nav-link py-3 rounded-0 text-white" style="background:#148f77;border-bottom:solid 1px #117864">
<i :class="u.icon" text-white style="font-size:30px;"></i>
<b-tooltip :target="'tooltip-button-interactive'+key" placement="right" variant="light">
{{ u.name }}
</b-tooltip>
</a>

</li>
</ul>


</div>
<div class="col-9">

<ul class="nav nav-pills flex-column mb-auto">
<li class="nav-item" v-for="(s,key) in user_menu.sub" :key="key">
<a href="#" class="nav-link text-white">
{{ s.name }}
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
export default {
components:{

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
},




user_menu(){
let menu;
let role=this.$page.props.auth.user.role;
let profile=this.$page.props.auth.user.profile_status;

let user={
main:[
{name:'Carbon Footprint',url:'',icon:'bi bi-cloud-haze-fill'},
{name:'Emission Targets',url:'',icon:'bi bi-bar-chart-line'},
{name:'Carbon Offset',url:'',icon:'bi bi-tree-fill'},
{name:'Carbon Market',url:'',icon:'bi bi-bag-fill'},
{name:'Carbon Fund',url:'',icon:'bi bi-cash-coin'},
{name:'Projects',url:'',icon:'bi bi-clipboard2-data-fill'},
{name:'Education Hub',url:'',icon:'bi bi-book-fill'},
{name:'Messages',url:'',icon:'bi bi-chat-left-text-fill'},


],
sub:[
{name:'Emission Summary',url:''},
{name:'Track Progress',url:''},
{name:'Reduction Strategies',url:''},
{name:'Offset Options',url:''},
{name:'Resources & Tools',url:''},
{name:'FAQs',url:''},
{name:'Buy / Sell Carbon Credit',url:''},
{name:'Support Local Projects',url:''},
{name:'Share Your Progress',url:''},
{name:'Community Engagement',url:''},



]
};

let admin={
main:[
{name:'Carbon Footprint',url:'',icon:'bi bi-cloud-haze-fill'},
{name:'Emission Targets',url:'',icon:'bi bi-bar-chart-line'},
{name:'Carbon Offset',url:'',icon:'bi bi-tree-fill'},
{name:'Carbon Market',url:'',icon:'bi bi-bag-fill'},
{name:'Carbon Fund',url:'',icon:'bi bi-cash-coin'},
{name:'Projects',url:'',icon:'bi bi-clipboard2-data-fill'},
{name:'Education Hub',url:'',icon:'bi bi-book-fill'},
{name:'Clients',url:'',icon:'bi bi-people-fill'},
{name:'Messages',url:'',icon:'bi bi-chat-left-text-fill'},
],
sub:[
{name:'Emission Summary',url:''},
{name:'Track Progress',url:''},
{name:'Reduction Strategies',url:''},
{name:'Offset Options',url:''},
{name:'Resources & Tools',url:''},
{name:'FAQs',url:''},
{name:'Buy / Sell Carbon Credit',url:''},
{name:'Support Local Projects',url:''},
{name:'Share Your Progress',url:''},
{name:'Community Engagement',url:''},

]
};

let business={};
let government={};
let organisation={};

if(role=='user'){
menu=user;
}else if(role=='admin'){
menu=admin;
}

return menu;

}















}


}
</script>