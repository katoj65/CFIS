<template>
<span>
<Inertia-link :href="route(url)" class="ml-2 text-danger">{{ title }} <b-icon icon="arrow-right"></b-icon></Inertia-link>
</span>
</template>

<script>
export default {
props:{
title:{},
url:{},
}
}
</script>