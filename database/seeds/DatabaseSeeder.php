<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            IndoRegionSeeder::class,
            IndoRegionRegencySeeder::class,
            IndoRegionVillageSeeder::class,
            IndoRegionDistrictSeeder::class,
            IndoRegionProvinceSeeder::class,
        ]);
    }
}
