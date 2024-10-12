<template>
<app-layout>
<div class="row">
<div class="col-12 col-md-3">
</div>
<div class="col-12 col-md-6">
<slot/>
</div>
<div class="col-12 col-md-3">
</div>
</div>
</app-layout>
</template>
<script>
import AppLayout from '../Layouts/AppLayout.vue'
export default {
components:{
AppLayout
}

}
</script>