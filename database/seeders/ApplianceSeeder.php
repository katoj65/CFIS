<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


$appliance=[
['name'=>'lights','category'=>'all','use'=>'light'],
['name'=>'Refrigerators','category'=>'all','use'=>'freeze'],
['name'=>'Freezers','category'=>'all','use'=>'freeze'],
['name'=>'Stoves','category'=>'all','use'=>'cook'],
['name'=>'Ovens','category'=>'all','use'=>'cook'],
['name'=>'Microwaves','category'=>'all','use'=>'warm'],
['name'=>'Dishwashers','category'=>'home','use'=>'clean'],
['name'=>'Washing machines','category'=>'home','use'=>'clean'],
['name'=>'Dryers','category'=>'all','use'=>'clean'],
['name'=>'TVs','category'=>'all','use'=>'entertainment'],
['name'=>'Computers','category'=>'all','use'=>'work'],
['name'=>'Air conditioners','category'=>'all','use'=>'temperature'],
['name'=>'Heating systems','category'=>'business','use'=>'heat'],
['name'=>'Water heaters','category'=>'all','use'=>'warm'],

];

foreach($appliance as $a){
DB::table('appliance')->insert(['name'=>$a['name'],
'category'=>$a['category'],
'use'=>$a['use']
]);
}




    }
}
