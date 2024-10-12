<template>
<div>
<a href="#" @click="modalShow = !modalShow">
Modal
</a>
<b-modal v-model="modalShow">
<template #modal-title>
Title
</template>


Content


</b-modal>
</div>
</template>
<script>
export default {
data() {
return {
modalShow: false
}
}
}
</script>