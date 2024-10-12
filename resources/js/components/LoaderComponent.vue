<template>
<div class="text-center">
<div class="spinner-border" role="status" v-if="isLoading==true">
<span class="sr-only">Loading...</span>
</div>
</div>
</template>
<script>
export default {
props:{
isLoading:{},
}
}
</script>