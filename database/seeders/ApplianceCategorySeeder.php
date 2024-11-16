<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplianceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    $category=[
    'home',
    'organisation',
    'business',
    'government'
    ];

    foreach($category as $c){
    DB::table('appliance_category')->insert(['name'=>$c]);
    }

    }
}
