<template>
<div class="form-group">
<button class="btn btn-lg btn-success btn-block" v-if="isLoading==false">{{ title }} </button>
<button class="btn btn-success btn-block btn-lg" type="button" disabled v-else>
<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
<span> Loading... </span>
</button>
</div>
</template>
<script>
export default {
props:{
isLoading:{},
title:{}
}
}
</script>