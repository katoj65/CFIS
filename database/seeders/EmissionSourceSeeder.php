<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmissionSource;

class EmissionSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

$source=[
['name'=>'Energy Production','description'=>'hydro-electricity, coal, oil, and natural gas for electricity and heat','icon'=>'','url'=>'/energy-production','order_by'=>0],
['name'=>'Transportation','description'=>'vehicles, ships, airplanes, and trains for transporting goods and people','icon'=>'','url'=>'/energy-production','order_by'=>0],
['name'=>'Industry','description'=>'production of goods and materials','icon'=>'','url'=>'/goods','order_by'=>0],
['name'=>'Agriculture','description'=>'cultivation, soil management, fertilizers, chemicals, plants and animals','icon'=>'','url'=>'/agriculture','order_by'=>0],
['name'=>'Forestry and Land Use','description'=>'deforestation, land use changes, and forestry practices','icon'=>'','url'=>'/forestry-land-use','order_by'=>0],
['name'=>'Waste Management','description'=>' decomposition of organic waste and the treatment of wastewater','icon'=>'','url'=>'/waste-management','order_by'=>0],
['name'=>'Residential and Commercial','description'=>'heating, cooling, lighting, and appliances in residential and commercial buildings','icon'=>'','url'=>'/residential-commercial','order_by'=>0]

];

foreach($source as $s){
EmissionSource::create($s);
}





    }
}
