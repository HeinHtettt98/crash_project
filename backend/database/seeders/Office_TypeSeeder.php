<?php

namespace Database\Seeders;

use App\Models\Office_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Office_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $officeType = ['HO', 'Region', 'District', 'Township'];

        foreach ($officeType as $type) {
            Office_Type::firstOrCreate(['name' => $type]);
        }
    }
}
