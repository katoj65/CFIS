<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ApplianceUseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$use=[
'light',
'cook',
'freeze',
'entertainment',
'warm',
'clean',
];

foreach($use as $u){
DB::table('appliance_use')->insert(['name'=>$u]);
}




    }
}
