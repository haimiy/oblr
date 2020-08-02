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
            ['name' => 'Approval Letter from Health Officer	', 'issuing_agency' => 'Town Planner Office','description'=>'Letter of approval from the Town / Municipal Health Officer'],
            ['name' => 'CRB License	', 'issuing_agency' => 'Contractors Registration Board','description'=>'License issued by the Contractors Registration Board'],
            ['name' => 'Permit from the Regulatory Bodies', 'issuing_agency' => 'Regulatory Bodies','description'=>'License issued by the Contractors Registration Board'],
            ['name' => 'Permit from Ministry of Education', 'issuing_agency' => 'Ministry of Education and Vocation Training','description'=>'Permit issued by Ministry of Education and Vocation Training'],
        ]);

        foreach ($permissions as $permission){
            \App\Permission::create([
                'name' => $permission['name'],
                'issuing_agency' => $permission['issuing_agency'],
                'description' => $permission['description']
            ]);
        }

    }
}
