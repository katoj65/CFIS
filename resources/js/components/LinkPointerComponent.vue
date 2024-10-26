<template>
<span>
<Inertia-link :href="route(url)" class="ml-2 text-danger">{{ title }}
<b-icon icon="arrow-right" v-if="point==null"></b-icon>
<slot/>
</Inertia-link>
</span>
</template>

<script>
export default {
props:{
title:{},
url:{},
point:{},
}
}
</script>