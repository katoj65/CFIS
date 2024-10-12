<template>
    <div class="card h-100">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Water Usage</h5>

            </div>
            <p class="card-sub-title">
                Calculate your water usage
            </p>



            <form>


                <div class="form-group pb-4 ">
                    <label class="form-label" for="cf-full-name">Water Source</label>
                    <div class="row">
                    <div class="col-6">
                        <select class="form-control" id="cf-full-name">
                            <option value="default_option">--Select Source--</option>
                            <option value="option_select_name" v-for="(l,key) in select_source" :key="key">
                               {{ l.name }}
                            </option>

                        </select>
                    </div>
                    <div class="col-6">
                    <input type="text" class="form-control" id="cf-full-name1" placeholder="Daily usage">
                    </div>
                    <div class="col-12 mt-4 border-bottom">
                        <!-- <input type="text" class="form-control" id="cf-full-name2" placeholder="Number of lights"> -->
                        </div>
                    </div>
                </div>






<div class="form-group">
<button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
</div>



            </form>
        </div>
    </div>
</template>
<script>

export default {
data(){return{
select_source:[
{name:'Piped Water',value:'piped'},
{name:'Rain Water',value:'rain'},
{name:'Well',value:'well'},
{name:'Borehole',value:'bore'},
],








form:this.$inertia.form({

})

}}


}
</script>
<style scoped>
.form-label{
font-size:16px;
font-weight:bold;
}
</style>