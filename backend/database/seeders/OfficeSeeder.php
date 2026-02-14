<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $officeType = [
            ['name' => 'Ho Office', 'office_type_id' => 1],
            ['name' => 'Region Office', 'office_type_id' => 2],
            ['name' => 'District Office', 'office_type_id' => 3],
            ['name' => 'Township Office', 'office_type_id' => 4]
        ];

        foreach ($officeType as $type) {
            Office::firstOrCreate($type);
        }
    }
}
