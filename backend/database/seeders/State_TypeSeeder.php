<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State_Type;

class State_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $state = ['Union Government State', 'Other'];

        foreach ($state as $s) {
            State_Type::firstOrCreate(['name' => $s]);
        }
    }
}
