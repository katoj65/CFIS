<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReportGasEmission;

class GreenhouseGasReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$mt='Metric Ton';
$gases=[
['name'=>'Carbon Dioxide (CO2)','amount'=>2000,'measurement'=>$mt,'order_by'=>1],
['name'=>'Methane (CH4)','amount'=>2000,'measurement'=>$mt,'order_by'=>2],
['name'=>'Nitrous Oxide (N20)','amount'=>2000,'measurement'=>$mt,'order_by'=>3],
['name'=>'Hydrofluorocarbon (HFC)','amount'=>2000,'measurement'=>$mt,'order_by'=>4]];

foreach($gases as $g){
ReportGasEmission::create($g);
}

}
}
