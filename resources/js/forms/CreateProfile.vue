<template>
<div class="p-2" style="border:none;">
<div class="row">
<div class="col12 col-md-2"></div>
<div class="col-md-6 col-12">
    <div class="card  m-2" style="border:none;">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Create user profile</h5>
            </div>
            <form @submit.prevent="submit">
                <error-component :form="form"/>
                <div class="form-group">
                    <label class="form-label" for="full-name">Your date of birth</label>
                    <div class="form-control-wrap">
                        <input type="date" class="form-control" id="full-name" v-model="form.dob">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="address">Address</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="address" placeholder="Enter your address" v-model="form.address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone-no">Phone number</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="phone-no" placeholder="Enter your phone number" v-model="form.tel">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="pay-amount">You profile type</label>
                    <div class="form-control-wrap">

                        <select class="form-select" @change="select_options($event)">
                            <option value="">Select your profile setup</option>
                            <option :value="u.value" v-for="(u,key) in usage" :key="key" >
                                {{ u.option }}
                            </option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="form-label" for="prof">Profession</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="prof" placeholder="Enter your profession" v-model="form.profession">
                    </div>
                </div>


                <div class="form-group">
                    <label class="form-label" for="job">Employment</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control" id="job" placeholder="Enter your current job" v-model="form.job">
                    </div>
                </div>


                <div class="form-group">
                  <submit-button :isLoading="isLoading" :title="'Save'"/>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col12 col-md-2"></div>
</div>
</div>
</template>
<script>
import ErrorComponent from '../components/ErrorComponent.vue';
import SubmitButton from '../components/SubmitButton.vue';

export default {
components:{
SubmitButton,
ErrorComponent
},
data(){return{
//personal','organisation','business','government','other''
usage:[
{option:'Personal',value:'personal'},
{option:'Organisation',value:'organisation'},
{option:'Business',value:'business'},
{option:'Government entity',value:'government'},
{option:'Other',value:'other'},
],

//select
select:[],
isLoading:false,
//form
form:this.$inertia.form({
dob:'',
address:'',
tel:'',
role:'',
profession:'',
job:''

}),




}},

methods:{
select_options(event){
this.form.role=event.target.value;
}
,
submit(){
this.isLoading=true;
this.form.post('create-profile',{
onFinish:()=>{
this.isLoading=false;
}

});
}




},




}
</script>