<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $states = [
            ['name' => 'ရန်ကုန်တိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'မန္တလေးတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'စစ်ကိုင်းတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'မကွေးတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'ပဲခူးတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'ဧရာဝတီတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'တနင်္သာရီတိုင်းဒေသကြီး', 'state_type_id' => 1],

            ['name' => 'ကချင်ပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ကယားပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ကရင်ပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ချင်းပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'မွန်ပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ရခိုင်ပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ရှမ်းပြည်နယ်', 'state_type_id' => 1],

            ['name' => 'နေပြည်တော်ပြည်ထောင်စုနယ်မြေ', 'state_type_id' => 2],
        ];

        foreach ($states as $s) {
            State::firstOrCreate($s);
        }
    }
}
