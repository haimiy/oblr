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
        //Arusha
        District::create(['region_id' => 1, 'name' => 'Meru']);

        District::create(['region_id' => 1, 'name' => 'Arusha City']);

        District::create(['region_id' => 1, 'name' => 'Arusha Rural District']);

        District::create(['region_id' => 1, 'name' => 'Karatu']);

        District::create(['region_id' => 1, 'name' => 'Longido']);

        District::create(['region_id' => 1, 'name' => 'Monduli']);

        District::create(['region_id' => 1, 'name' => 'Ngorongoro']);

        //Dar es salaam
        District::create(['region_id' => 2, 'name' => 'Ilala']);

        District::create(['region_id' => 2, 'name' => 'Kinondoni']);

        District::create(['region_id' => 2, 'name' => 'Temeke']);

        District::create(['region_id' => 2, 'name' => 'Kigamboni']);

        District::create(['region_id' => 2, 'name' => 'Ubungo']);

    }
}
