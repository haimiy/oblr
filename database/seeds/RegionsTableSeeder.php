<?php

use Illuminate\Database\Seeder;
use App\Regions;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regions::create(['name' => 'Arusha', 'id' => 1]);
        Regions::create(['name' => 'Dar es Salaam']);
        Regions::create(['name' => 'Dodoma']);
        Regions::create(['name' => 'Kagera']);
        Regions::create(['name' => 'Katavi']);
        Regions::create(['name' => 'Kilimanjaro']);
        Regions::create(['name' => 'Lindi']);
        Regions::create(['name' => 'Manyara']);
        Regions::create(['name' => 'Mara']);
        Regions::create(['name' => 'Mbeya']);
        Regions::create(['name' => 'Morogoro']);
        Regions::create(['name' => 'Mtwara']);
        Regions::create(['name' => 'Mwanza']);
        Regions::create(['name' => 'Njombe']);
        Regions::create(['name' => 'Pwani']);
        Regions::create(['name' => 'Rukwa']);
        Regions::create(['name' => 'Ruvuma']);
        Regions::create(['name' => 'Shinyanga']);
        Regions::create(['name' => 'Simiyu']);
        Regions::create(['name' => 'Tabora']);
        Regions::create(['name' => 'Tanga']);
        Regions::create(['name' => 'Zanzibar']);
    }
}
