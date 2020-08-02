<?php

use Illuminate\Database\Seeder;

class BusinessTypePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_types_permissions = collect([
            ['business_type_id'=>1,'permission_id'=>1],
            ['business_type_id'=>2,'permission_id'=>2],
            ['business_type_id'=>4,'permission_id'=>2],
            ['business_type_id'=>5,'permission_id'=>2],
            ['business_type_id'=>6,'permission_id'=>2],
            ['business_type_id'=>7,'permission_id'=>2],
            ['business_type_id'=>8,'permission_id'=>2],
            ['business_type_id'=>9,'permission_id'=>2],
            ['business_type_id'=>10,'permission_id'=>2],
            ['business_type_id'=>11,'permission_id'=>2],
            ['business_type_id'=>12,'permission_id'=>2],
            ['business_type_id'=>13,'permission_id'=>2],
            ['business_type_id'=>14,'permission_id'=>2],
            ['business_type_id'=>15,'permission_id'=>2],
            ['business_type_id'=>16,'permission_id'=>2],
            ['business_type_id'=>17,'permission_id'=>2],
            ['business_type_id'=>18,'permission_id'=>2],
            ['business_type_id'=>19,'permission_id'=>2],
            ['business_type_id'=>21,'permission_id'=>3],
            ['business_type_id'=>23,'permission_id'=>4],
            ['business_type_id'=>24,'permission_id'=>4],
            ['business_type_id'=>26,'permission_id'=>4],
            ['business_type_id'=>27,'permission_id'=>4],
        ]);

        foreach ($business_types_permissions as $business_types_permission) {
                \Illuminate\Support\Facades\DB::table('business_type_permission')->insert([
                    'business_type_id' => $business_types_permission['business_type_id'],
                    'permission_id' => $business_types_permission['permission_id'],
            ]);
        }
    }
}
