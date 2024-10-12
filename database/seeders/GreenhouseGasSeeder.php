<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GreenhouseGasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$gases[]=['name'=>'Carbon Dioxide','code'=>'CO2'];
$gases[]=['name'=>'Methane','code'=>'CH4'];
$gases[]=['name'=>'Nitrous Oxide','code'=>'N2O'];
$gases[]=['name'=>'Hydrofluorocarbon','code'=>'HFC'];
$gases[]=['name'=>'Perfluorocarbon','code'=>'PFC'];
$gases[]=['name'=>'Sulfur Hexafluoride','code'=>'SF6'];
$gases[]=['name'=>'Water Vapor','code'=>'H2O'];

foreach($gases as $gas){
    DB::table('greenhouse_gases')->insert(['name'=>$gas['name'],'code'=>$gas['code']]);
    }

    }




}
