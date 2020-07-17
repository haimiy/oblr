<?php

use Illuminate\Database\Seeder;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\DocumentType::create([
            'name' => 'Tax Identification No',
        ]);
        \App\DocumentType::create([
            'name' => 'Memorandum and Articles of Association',
        ]);
        \App\DocumentType::create([
            'name' => 'Proof of Tanzanian Citizenship/Residence Class Permit',
        ]);
        \App\DocumentType::create([
            'name' => 'Permit',
        ]);
    }
}
