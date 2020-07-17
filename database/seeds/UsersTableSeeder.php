<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::create([
            'first_name' => 'Admin',
            'last_name' => 'Strator',
            'email' => 'admin@example.com',
            'phone' => '0772300007',
            'gender' => 'male',
            'dob' => \Carbon\Carbon::make('01/01/2012'),
            'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);

        \App\GovernmentOfficial::create([
            'first_name' => 'Government',
            'last_name' => 'Official',
            'email' => 'gvt@example.com',
            'phone' => '0772300007',
            'gender' => 'male',
            'dob' => \Carbon\Carbon::make('01/01/2012'),
            'address_id' => 1,
            'created_by' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);

        \App\Applicant::create([
            'first_name' => 'Appli',
            'last_name' => 'Cant',
            'email' => 'applicant@example.com',
            'phone' => '0772300007',
            'gender' => 'male',
            'dob' => \Carbon\Carbon::make('01/01/2012'),
            'address_id' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);
    }
}
