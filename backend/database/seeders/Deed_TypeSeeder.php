<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Deed_Type;

class Deed_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $deedType = ['Trading', 'Pay', 'Lease', 'Exchange', 'Pledge'];

        foreach ($deedType as $type) {
            Deed_Type::firstOrCreate(['name' => $type]);
        }
    }
}
