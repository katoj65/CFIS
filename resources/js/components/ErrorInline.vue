<template>
<span>
<span v-if="error!=null" class="text-danger">
{{ error }}
</span>
</span>
</template>
<script>
export default {
    props:{
    error:{}
    }
}
</script>