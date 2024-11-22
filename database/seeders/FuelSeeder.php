<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
public function run()
{
//
$fuel=['Petrol',
'Diessel',
'Hydrogen',
'Electricity',
'Methene',
'kerosene',
'Aviation turbine fuel'];
foreach($fuel as $f){
DB::table('fuel')->insert(['name'=>$f]);
}




}
}
