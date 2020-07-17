<?php

use Illuminate\Database\Seeder;

class BusinessTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_types = collect([

            //['sector_id' => 1, 'name' => 'Civil Contractors'],
            ['category_id' => 1, 'name' => 'Civil Contractors Class V'],
            ['category_id' => 1, 'name' => 'Civil Contractors Class VI'],

            //['sector_id' => 2, 'name' => 'Phone Accessories'],
            ['category_id' => 2, 'name' => 'Phone Accessories'],

            //['sector_id' => 3, 'name' => 'Building Contractors'],
            ['category_id' => 3, 'name' => 'Building Contractors Class I'],
            ['category_id' => 3, 'name' => 'Building Contractors Class II'],
            ['category_id' => 3, 'name' => 'Building Contractors Class III'],
            ['category_id' => 3, 'name' => 'Building Contractors Class IV'],
            ['category_id' => 3, 'name' => 'Building Contractors Class IV'],
            ['category_id' => 3, 'name' => 'Building Contractors Class V'],
            ['category_id' => 3, 'name' => 'Building Contractors Class VI'],
            ['category_id' => 3, 'name' => 'Building Contractors Class VII'],

            //['sector_id' => 4, 'name' => 'Mechanical Contractors'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class I'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class II'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class III'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class IV'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class IV'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class V'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class VI'],
            ['category_id' => 4, 'name' => 'Mechanical Contractors Class VII'],

            //['sector_id' => 5, 'name' => 'Day care schools'],
            ['category_id' => 5, 'name' => 'Day care'],

            //['sector_id' => 6, 'name' => 'Driving Schools'],
            ['category_id' => 6, 'name' => 'Driving Schools'],

            //['sector_id' => 7, 'name' => 'Education Equipments'],
            ['category_id' => 7, 'name' => 'Education Equipments'],

            //['sector_id' => 8, 'name' => 'Nursery Schools'],
            ['category_id' => 8, 'name' => 'Nursery Schools'],

            //['sector_id' => 9, 'name' => 'Schools and Colleges'],
            ['category_id' => 9, 'name' => 'Schools and Colleges'],

            //['sector_id' => 10, 'name' => 'Duplicate License'],
            ['category_id' => 10, 'name' => 'Duplicate License'],
        ]);

        foreach ($business_types as $business_type){
            \App\BusinessType::create([
                'category_id' => $business_type['category_id'],
                'name' => $business_type['name']
            ]);
        }
    }
}
