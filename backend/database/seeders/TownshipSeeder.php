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
        $township = [
            ['name' => 'ဗဟန်းမြို့နယ်', 'state_id' => 1, 'district_id' => 1],
            ['name' => 'ဗိုလ်တစ်ထောင်မြို့နယ်', 'state_id' => 1, 'district_id' => 1],
            ['name' => 'စဉ့်ကိုင်မြို့နယ်', 'state_id' => 2, 'district_id' => 2],
            ['name' => 'ဟိုပုံးမြို့နယ်', 'state_id' => 3, 'district_id' => 3],
            ['name' => 'မိုင်းမယ်မြို့နယ်', 'state_id' => 3, 'district_id' => 3]
        ];


        foreach ($township as $t) {
            Township::firstOrCreate($t);
        }
    }
}
