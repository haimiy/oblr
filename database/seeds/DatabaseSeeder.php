<?php

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
        // $this->call(UserSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);

        $this->call(EntitiesTableSeeder::class);

        $this->call(SectorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BusinessTypesSeeder::class);

        $this->call(BusinessTypePermissionTableSeeder::class);
        $this->call(DocumentTypesTableSeeder::class);
    }
}
