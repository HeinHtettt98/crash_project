<?php

namespace Database\Seeders;

use App\Models\Township;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $townships = [
            // ရန်ကုန်အရှေ့ခရိုင် (district_id = 1)
            ['name' => 'တာမွေမြို့နယ်', 'state_id' => 1, 'district_id' => 1],
            ['name' => 'သင်္ဃန်းကျွန်းမြို့နယ်', 'state_id' => 1, 'district_id' => 1],

            // ရန်ကုန်အနောက်ခရိုင် (district_id = 2)
            ['name' => 'လသာမြို့နယ်', 'state_id' => 1, 'district_id' => 2],
            ['name' => 'ဗိုလ်တထောင်မြို့နယ်', 'state_id' => 1, 'district_id' => 2],

            // မန္တလေးခရိုင် (district_id = 5)
            ['name' => 'အောင်မြေသာဇံမြို့နယ်', 'state_id' => 2, 'district_id' => 5],
            ['name' => 'ချမ်းအေးသာစံမြို့နယ်', 'state_id' => 2, 'district_id' => 5],

            // တောင်ကြီးခရိုင် (district_id = 8)
            ['name' => 'တောင်ကြီးမြို့နယ်', 'state_id' => 14, 'district_id' => 8],
            ['name' => 'ဟိုပုံးမြို့နယ်', 'state_id' => 14, 'district_id' => 8],

            // လားရှိုးခရိုင် (district_id = 9)
            ['name' => 'လားရှိုးမြို့နယ်', 'state_id' => 14, 'district_id' => 9],
            ['name' => 'သီပေါမြို့နယ်', 'state_id' => 14, 'district_id' => 9],
        ];

        foreach ($townships as $t) {
            Township::firstOrCreate($t);
        }
    }
}
