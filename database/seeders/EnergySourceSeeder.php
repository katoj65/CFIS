<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnergySourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $energy=[
    'Hydropower',
    'Solar',
    'Wind',
    'Geothermal',
    'Gal',
    'Fuel',
    'Charcoal',
    'Firewood'];

foreach($energy as $e){
DB::table('energy_source')->insert(['name'=>$e]);
}


    }
}
