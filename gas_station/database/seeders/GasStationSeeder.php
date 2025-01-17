<?php
 
namespace Database\Seeders;

use App\Models\Coordinates;
use App\Models\GasStation;
use Illuminate\Database\Seeder;

class GasStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make {6} factories of gas_station
        // creating also a coordinate for the gas_station
        GasStation::factory(6)
        ->has(Coordinates::factory())
        ->create();
    }
}
