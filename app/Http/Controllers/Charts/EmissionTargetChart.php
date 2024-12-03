<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserEmissionModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\EmissionTargetChartResource;

class EmissionTargetChart extends Controller
{
    //

public function get_emission_target(Request $request){
$from_date=$request->segment(4);
$to_date=$request->segment(5);
$emission_activity=$request->segment(6);
$model=UserEmissionModel::where('created_at','>=',$from_date)
->where('created_at','<=',$to_date)
->where('emission_activity',$emission_activity)
->where('user_id',Auth::user()->id)
->orderby('created_at','DESC')
->get();

return EmissionTargetChartResource::collection($model);


}










}
