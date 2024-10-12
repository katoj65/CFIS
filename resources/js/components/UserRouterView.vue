<template>
<div>
<slot/>
</div>
</template>
<script>
export default {
computed:{
auth(){
const auth=this.$page.props.auth;
const user=auth.user;
const profile=auth.profile;
return {'user':user,'profile':profile};
}



}

}
</script>