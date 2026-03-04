<?php

namespace Database\Seeders;

use App\Models\Deed_Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Deed_SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deedSettings = [
            [
                'deed_type_id' => 1,
                'copy_fee' => '5000',
                'register_fee' => '5',
                'stamp_fee' => '2',
                'maintenance_fee' => '5',
                'commission_letter_fee' => '3',
            ],
            [
                'deed_type_id' => 2,
                'copy_fee' => '8000',
                'register_fee' => '5',
                'stamp_fee' => '2',
                'maintenance_fee' => '5',
                'commission_letter_fee' => '3',
            ],
            [
                'deed_type_id' => 3,
                'copy_fee' => '6000',
                'register_fee' => '7',
                'stamp_fee' => '5',
                'maintenance_fee' => '5',
                'commission_letter_fee' => '3',
            ],
            [
                'deed_type_id' => 4,
                'copy_fee' => '10000',
                'register_fee' => '4',
                'stamp_fee' => '5',
                'maintenance_fee' => '7',
                'commission_letter_fee' => '6',
            ],
            [
                'deed_type_id' => 5,
                'copy_fee' => '4500',
                'register_fee' => '3',
                'stamp_fee' => '2',
                'maintenance_fee' => '2',
                'commission_letter_fee' => '3',
            ],
        ];

        foreach ($deedSettings as $setting) {
            Deed_Setting::firstOrCreate($setting);
        }
    }
}
