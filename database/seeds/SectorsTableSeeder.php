<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectors = [
            'Civil Contractors',
            'Communication',
            'Contracting Business',
            'Education',
            'Duplicate',
        ];

        foreach ($sectors as $sector){
            \App\Sector::create([
                'name' => $sector
            ]);
        }
    }
}
