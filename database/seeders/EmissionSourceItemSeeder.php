<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmissionSourceItem;

class EmissionSourceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
$items=[
['name'=>'electric bulb','usage'=>'lighting'],
['name'=>'electric tube','usage'=>'lighting'],
['name'=>'electric cooker','usage'=>'cooking'],
['name'=>'gas cooker','usage'=>'cooking'],
['name'=>'kerosen lamp','usage'=>'lighting'],
['name'=>'candle','usage'=>'lighting'],
['name'=>'charcoal stove','name'=>'cooking'],
['name'=>'kerosen stove','usage'=>'cooking'],
['name'=>'gas lamp','name'=>'lighting'],
['name'=>'gas cooker','usage'=>'cooking'],
['name'=>'firewood','usage'=>'cooking']
];
foreach($items as $item){
EmissionSourceItem::create($item);
}

    }
}
