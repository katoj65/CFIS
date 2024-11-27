<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BusinessSectorsSeeder::class);
        $this->call(GreenhouseGasSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(SectorSeeder::class);
        $this->call(CarbonFootprintParameterSeeder::class);
        $this->call(EmissionSourceSeeder::class);
        $this->call(GreenhouseGasReportSeeder::class);
        $this->call(ReportSectorEmissionSeeder::class);
        //$this->call(EmissionSourceItemSeeder::class);
        $this->call(FuelSeeder::class);
        $this->call(EmissionActivitySeeder::class);

    }
}
