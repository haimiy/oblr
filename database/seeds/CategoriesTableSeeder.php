<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = collect([
            ['sector_id' => 1, 'name' => 'Civil Contractors'],
            ['sector_id' => 2, 'name' => 'Phone Accessories'],
            ['sector_id' => 3, 'name' => 'Building Contractors'],
            ['sector_id' => 3, 'name' => 'Mechanical Contractors'],
            ['sector_id' => 4, 'name' => 'Day care schools'],
            ['sector_id' => 4, 'name' => 'Driving Schools'],
            ['sector_id' => 4, 'name' => 'Education Equipments'],
            ['sector_id' => 4, 'name' => 'Nursery Schools'],
            ['sector_id' => 4, 'name' => 'Schools and Colleges'],
            ['sector_id' => 5, 'name' => 'Duplicate License'],
        ]);

        foreach ($categories as $category){
            \App\Category::create([
                'sector_id' => $category['sector_id'],
                'name' => $category['name']
            ]);
        }
    }
}
