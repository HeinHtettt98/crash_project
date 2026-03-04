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
        $districts = [
            // ရန်ကုန်တိုင်း (state_id = 1)
            ['name' => 'ရန်ကုန်အရှေ့ခရိုင်', 'state_id' => 1],
            ['name' => 'ရန်ကုန်အနောက်ခရိုင်', 'state_id' => 1],
            ['name' => 'ရန်ကုန်မြောက်ခရိုင်', 'state_id' => 1],
            ['name' => 'ရန်ကုန်တောင်ခရိုင်', 'state_id' => 1],

            // မန္တလေးတိုင်း (state_id = 2)
            ['name' => 'မန္တလေးခရိုင်', 'state_id' => 2],
            ['name' => 'ကျောက်ဆည်ခရိုင်', 'state_id' => 2],
            ['name' => 'မိတ္ထီလာခရိုင်', 'state_id' => 2],

            // ရှမ်းပြည်နယ် (state_id = 14)
            ['name' => 'တောင်ကြီးခရိုင်', 'state_id' => 14],
            ['name' => 'လားရှိုးခရိုင်', 'state_id' => 14],
            ['name' => 'ကျိုင်းတုံခရိုင်', 'state_id' => 14],

            // နေပြည်တော် (state_id = 15)
            ['name' => 'ဥတ္တရသီရိခရိုင်', 'state_id' => 15],
        ];

        foreach ($districts as $s) {
            District::firstOrCreate($s);
        }
    }
}
