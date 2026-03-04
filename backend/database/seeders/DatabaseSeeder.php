<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Deed_TypeSeeder;
use Database\Seeders\Deed_SettingSeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\Office_TypeSeeder;
use Database\Seeders\OfficeSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\State_TypeSeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\TownshipSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Office_TypeSeeder::class);
        $this->call(OfficeSeeder::class);
        $this->call(Deed_TypeSeeder::class);
        $this->call(State_TypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(TownshipSeeder::class);
        $this->call(Deed_SettingSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
