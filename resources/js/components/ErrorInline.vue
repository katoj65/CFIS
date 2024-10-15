<template>
<div>
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