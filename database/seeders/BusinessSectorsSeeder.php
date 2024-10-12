<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$sectors=[
'Transport and communication',
'Education',
'Government',
'Banking',
'Entertainment',
'Tourism',
'Agriculture',
'Health',
];

foreach($sectors as $sector){
DB::table('business_sectors')->insert([
'name'=>$sector
]);
}


    }
}
