<?php

use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\EntityType::create([
            'name' => 'Foreign Corporation',
        ]);

        \App\EntityType::create([
            'name' => 'Individual',
        ]);

        \App\EntityType::create([
            'name' => 'Limited Company',
        ]);

        \App\EntityType::create([
            'name' => 'Limited Liability Company',
        ]);

        \App\EntityType::create([
            'name' => 'Partnership',
        ]);
    }
}
