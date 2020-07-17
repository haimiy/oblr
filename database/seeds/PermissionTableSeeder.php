<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = collect([
            ['name' => 'Approval Letter from Health Officer	', 'issuing_agency' => 'Town Planner Office'],
            ['name' => 'CRB License	', 'issuing_agency' => 'Contractors Registration Board'],
            ['name' => 'Permit from the Regulatory Bodies', 'issuing_agency' => 'Regulatory Bodies'],
        ]);

        foreach ($permissions as $permission){
            \App\BusinessType::create([
                'sector_id' => $permission['name'],
                'name' => $permission['issuing_agency']
            ]);
        }
    }
}
