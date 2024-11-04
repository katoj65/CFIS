<template>
<div class="pt-1 pb-1">
<span v-if="error!=null" class="text-danger">
{{ error }}
</span>
</div>
</template>
<script>
export default {
    props:{
    error:{}
    }
}
</script>