<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $district = [
            ['name' => 'ရန်ကုန်ခရိုင်', 'state_id' => 1],
            ['name' => 'ကျောက်ဆည်ခရိုင်', 'state_id' => 2],
            ['name' => 'တောင်ကြီးခရိုင်', 'state_id' => 3],
            ['name' => 'လာရိူးခရိုင်', 'state_id' => 3]
        ];

        foreach ($district as $s) {
            District::firstOrCreate($s);
        }
    }
}
