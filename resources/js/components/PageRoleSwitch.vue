<template>
<div>

{{ role }}

</div>
</template>
<script>
export default {
computed:{
role(){
const role=this.$page.props.auth.user.role;
return role;
}

}


}
</script>