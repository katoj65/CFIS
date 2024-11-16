<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use App\Models\ApplianceModel;

class UserCalculator extends Controller
{
    //


public function energyCalculatorPage(){
if(Gate::allows('is_user')){
$data['title']='Calaculate Energy Consumption';
$data['response']=[
'appliance'=>ApplianceModel::where('category','home')->orwhere('category','all')->get(),



];


return Inertia::render('User/EnergyPage',$data);
}else{
return redirect('/');
}
}










}
