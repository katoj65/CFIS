<template>
<el-progress :percentage="percentage" :color="status" :stroke-width="width"></el-progress>
</template>
<script>
export default {
props:{
percentage:'',
width:{},
text:{}},
computed:{
status(){
var status='green';
if(this.percentage>80 && this.percentage<=99){
status='organge';
}else if(this.percentage>=100){
status='red';
}
return status;
}
}
}
</script>