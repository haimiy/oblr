<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create(['region_id' => 1, 'name' => 'Meru']);

        District::create(['region_id' => 1, 'name' => 'Arusha']);

        District::create(['region_id' => 1, 'name' => 'Arusha']);

        District::create(['region_id' => 1, 'name' => 'Karatu']);

        District::create(['region_id' => 1, 'name' => 'Longido']);

        District::create(['region_id' => 1, 'name' => 'Monduli']);

        District::create(['region_id' => 1, 'name' => 'Ngorongoro']);
    }
}
