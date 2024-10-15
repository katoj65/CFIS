<template>
<div class="py-3">
<div v-if="$page.props.flash.success">
<div class="example-alert">
<div class="alert alert-success alert-icon">
<em class="icon ni ni-check-circle"></em> {{ $page.props.flash.success }} </div>
</div>

</div>
</div>
</template>
<script>
export default {
props:{

}
}
</script>