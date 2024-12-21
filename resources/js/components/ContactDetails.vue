<template>
<div class="bg-dark p-5 mt-4" style="border-radius:10px;">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">

<img :src="$page.props.system.image_directory+'/logos/logo.png'">
</div>
<div class="col-12 col-md-8">
<h6 class="text-uppercase mb-4 text-white">Contact Us</h6>
<ul style="padding:0;">
<li>
<p class="text-white">
<b-icon icon="telephone-fill" aria-hidden="true" scale="1" class="mr-1"></b-icon> +256 752567534
/ +256 702856721
</p>
</li>
<li>
<p class="text-white">
<b-icon icon="envelope-fill" aria-hidden="true" scale="1" class="mr-1"></b-icon>
<a href="mailto:info@ugandacarbonregistry.org" class="text-white">info@ugandacarbonregistry.org</a>
</p>
</li>
</ul>
</div>
</div>
</div>

</div>
</template>
<script>
export default {
data(){
return{



}
}
}
</script>