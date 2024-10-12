<template>
    <div class="card h-100">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Food and Diet</h5>

            </div>
            <p class="card-sub-title">
                Calculate the carbon footprint from your transportation
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
                    <input type="text" class="form-control" id="cf-full-name1" placeholder="Number of days a month">
                    </div>
                    <div class="col-12 mt-4 border-bottom pb-4">
                        <select class="form-control" id="cf-full-name">
                            <option value="default_option">--Select Source--</option>
                            <option value="option_select_name" v-for="(l,key) in select_car" :key="key">
                               {{ l.name }}
                            </option>

                        </select>
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
{name:'Public Transport',value:'piped'},
{name:'Private Car',value:'rain'},
],
select_car:[
{name:'Sedan',value:'sedan'},
{name:'Coup',value:'coup'},
{name:'SUV',value:'suv'},
{name:'Truck',value:'truck'},
{name:'Lorry',value:'lorry'},
{name:'Bus',value:'bus'},
{name:'Trailor',value:'trailor'},
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