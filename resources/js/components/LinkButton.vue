<template>
<span>
<Inertia-link :class="'btn btn-'+type" :href="url">
{{ title }}
</Inertia-link>
</span>
</template>
<script>
export default {
props:{
title:{},
url:{},
type:'clear'

}
}
</script>