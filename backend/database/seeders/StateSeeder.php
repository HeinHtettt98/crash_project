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
        $state = [
            ['name' => 'ရန်ကုန်တိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'မန္တလေးတိုင်းဒေသကြီး', 'state_type_id' => 1],
            ['name' => 'ရှမ်းပြည်နယ်', 'state_type_id' => 1],
            ['name' => 'ကယားပြည်မယ်', 'state_type_id' => 1]
        ];

        foreach ($state as $s) {
            State::firstOrCreate($s);
        }
    }
}
