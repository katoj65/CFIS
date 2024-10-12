<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarbonFootprintParameter;

class CarbonFootprintParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$items=[
['name'=>'Energy Consumption','url'=>'energy-consumption'],
['name'=>'Water Usage','url'=>'water-usage'],
['name'=>'Waste Management','url'=>'waste-management'],
['name'=>'Transport','url'=>'transport'],
['name'=>'Food and Diet','url'=>'food-diet'],
['name'=>'Goods','url'=>'goods'],
['name'=>'Land Use','url'=>'land-use'],
['name'=>'Building','url'=>'building'],
['name'=>'Supply Chain','url'=>'supply-chain'],
];
foreach($items as $i){
CarbonFootprintParameter::create($i);
}




}






}
