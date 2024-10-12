<template>
    <div class="bg-secondary p-5 mt-4">

        <h6 class="text-uppercase mb-4">Have Any Query? Please Contact Us!</h6>
        <ul style="padding:0;">
        <li>
        <p class="text-white">
            <b-icon icon="telephone-fill" aria-hidden="true" scale="1" class="mr-1"></b-icon> +256 752567534
        </p>
        </li>

        <li>
            <p class="text-white">
                <b-icon icon="envelope-fill" aria-hidden="true" scale="1" class="mr-1"></b-icon> ugandacarbonregistry@gmail.com
            </p>
            </li>

        </ul>

        <div class="mt-3">
            <Inertia-link :href="route('contact')" class="btn btn-lg btn-dark">Fill the contact form</Inertia-link>
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