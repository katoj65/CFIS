<template>
    <div>

        <form @submit.prevent="submit">
            <!-- <error-component :form="form"/> -->



            <div class="form-group">
                <label class="form-label" for="address">Gender</label>
                <div class="form-control-wrap">
                    <select class="form-control" @change="select_gender($event)">
                        <option value="">--Select--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <error-inline :error="form.errors.gender"></error-inline>
            </div>




            <div class="form-group">
                <label class="form-label" for="full-name">Your date of birth</label>
                <div class="form-control-wrap">
                    <input type="date" class="form-control" id="full-name" v-model="form.dob">
                </div>
                <error-inline :error="form.errors.dob"></error-inline>
            </div>



            <div class="form-group">
                <label class="form-label" for="address">Address</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="address" placeholder="Enter your address" v-model="form.address">
                </div>
                <error-inline :error="form.errors.address"></error-inline>
            </div>


            <div class="form-group">
                <label class="form-label" for="phone-no">Phone number</label>
                <div class="form-control-wrap">
                    <input type="number" class="form-control" id="phone-no" placeholder="Enter your phone number" v-model="form.tel">
                </div>
                <error-inline :error="form.errors.tel"></error-inline>
            </div>




            <div class="form-group">
                <label class="form-label" for="prof">Profession</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="prof" placeholder="Enter your profession" v-model="form.profession">
                </div>
                <error-inline :error="form.errors.profession"></error-inline>
            </div>


            <div class="form-group">
                <label class="form-label" for="job">Employment</label>
                <div class="form-control-wrap">
                    <input type="text" class="form-control" id="job" placeholder="Enter your current job" v-model="form.job">
                </div>
                <error-inline :error="form.errors.job"></error-inline>
            </div>


            <div class="form-group pt-3" style="width:200px;">
              <submit-button :isLoading="isLoading" :title="'Save'"/>
            </div>
        </form>



    </div>
</template>
<script>
import SubmitButton from '../components/SubmitButton.vue';
import ErrorInline from '../components/ErrorInline.vue';
export default {
components:{
SubmitButton,
ErrorInline,
},
props:{

},
data(){
return{
isLoading:false,
form:this.$inertia.form({
dob:'',
gender:'',
address:'',
tel:'',
profession:'',
job:'',

}),






}
},


methods:{
submit(){
this.isLoading=true;
this.form.post(route('profile.personal_create'),{
onSuccess:()=>{
this.form.reset();
},
onFinish:()=>{
this.isLoading=false;

}

});

},

select_gender(event){
this.form.gender=event.target.value;
}






}






}
</script>