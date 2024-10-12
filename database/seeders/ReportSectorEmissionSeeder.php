<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReportSectorEmission;

class ReportSectorEmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$emissions=[
['name'=>'Agriculture','amount'=>200,'measurement'=>'Units','order_by'=>1,'icon'=>'public/icons/business.png'],
['name'=>'Industries','amount'=>300,'measurement'=>'Units','order_by'=>2,'icon'=>'public/icons/industry.png'],
['name'=>'Transport','amount'=>400,'measurement'=>'Units','order_by'=>3,'icon'=>'public/icons/business.png'],
['name'=>'Buildings','amount'=>500,'measurement'=>'Units','order_by'=>4,'icon'=>'public/icons/business.png'],
['name'=>'Land Use','amount'=>600,'measurement'=>'Units','order_by'=>5,'icon'=>'public/icons/business.png'],
['name'=>'Wastes','amount'=>900,'measurement'=>'Units','order_by'=>7,'icon'=>'public/icons/bank.png'],
['name'=>'Government Services','amount'=>800,'measurement'=>'Units','order_by'=>6,'icon'=>'public/icons/bank.png'],
];

foreach($emissions as $e){
    ReportSectorEmission::create($e);
}



    }
}
