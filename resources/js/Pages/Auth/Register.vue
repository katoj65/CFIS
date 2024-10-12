<template>
<landing-layout>
<div class="row p-4 m-4">
<div class="col-12 col-md-4"></div>
<div class="col-12 col-md-4">
<div>

<div class="card card-bordered mt-5 shadow1">
<div class="card-inner card-inner-lg">
<div class="nk-block-head">
<div class="nk-block-head-content">
<h4 class="nk-block-title">Create Account</h4>
<div class="nk-block-des">
<p>Access the CryptoLite panel using your email and passcode.</p>
</div>
</div>
</div>

<error-component :form="form"/>

<form @submit.prevent="submit">
<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="default-01">First name </label>
</div>
<input type="text" class="form-control form-control-lg" id="default-01" placeholder="Enter your first name" v-model="form.firstname">
</div>




<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="default-02">Last name </label>
</div>
<input type="text" class="form-control form-control-lg" id="default-02" placeholder="Enter your last name" v-model="form.lastname">
</div>






<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="default-03">Email </label>
</div>
<input type="text" class="form-control form-control-lg" id="default-03" placeholder="Enter your email address" v-model="form.email">
<div class="" v-if="form.errors.email!=null" style="color:red;">
    {{ form.errors.email }}
    </div>
</div>
<div class="form-group">
<div class="form-label-group">
<label class="form-label" for="password">Password</label>
</div>
<div class="form-control-wrap">
<input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" v-model="form.password">
</div>
</div>



<div class="form-group">
    <div class="form-label-group">
    <label class="form-label" for="password2">Confirm password</label>
    </div>
    <div class="form-control-wrap">
    <input type="password" class="form-control form-control-lg" id="password2" placeholder="Confirm password" v-model="form.password_confirmation">
    </div>
    </div>


<div class="form-group">
<button class="btn btn-lg  btn-block" v-if="isLoading==false">Login</button>
<button class="btn btn-block btn-lg" type="button" disabled v-else>
<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
<span> Loading... </span>
</button>
</div>
</form>







<div class="form-note-s2 text-center pt-4"> New on our platform? <inertia-link :href="route('login')">Login</inertia-link>
</div>
<div class="text-center pt-4 pb-3">
<h6 class="overline-title overline-title-sap"><span>OR</span></h6>
</div>
<ul class="nav justify-center gx-4">
<li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
<li class="nav-item"><a class="nav-link" href="#">Google</a></li>
</ul>
</div>
</div>
</div>


</div>

<div class="col-12 col-md-4"></div>

</div>
</landing-layout>
</template>
<script>
import LandingLayout from '../../Layouts/LandingLayout.vue';
import ErrorComponent from '../../components/ErrorComponent.vue';
export default {
components: {
LandingLayout,
ErrorComponent
},

data() {
return {
isLoading:false,
form: this.$inertia.form({
firstname:'joshua',
lastname:'kato',
email: 'katoj65@gmail.com',
password: '1234567890',
password_confirmation: '1234567890',
})
}
},

methods: {
submit() {
this.isLoading=true;
this.form.post(this.route('register'), {
onFinish: () => {this.form.reset('password', 'password_confirmation');
this.isLoading=false;
},
})
}
}
}
</script>
<style scoped>
input{
font-size:16px;
}
button{
    background:#138D75;
    color:white;
    }
    button:hover{
    background:#138E60;
    }
</style>