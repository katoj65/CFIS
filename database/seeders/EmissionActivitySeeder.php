<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmissionActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$name=[
'Transportation',
'Energy consumption',
'Waste disposal',
'Diet and meals',
'Agriculture and land use',
'Consumer activities',
'Forestry',
'Natural resource extraction',
'Commercial and residentail activities',
'Industry and manufacturing',
];

foreach($name as $n){
DB::table('emission_activity')->insert(['name'=>$n]);
}






    }
}
