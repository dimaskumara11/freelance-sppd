<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserGroupSeeder::class,
            UserSeeder::class,
            SkpdSeeder::class,
            PnsSeeder::class,
            KendaraanSeeder::class,
            AlamatSkpdSeeder::class,
            PejabatSeeder::class,
            SppdSeeder::class,
            SppdPengikutSeeder::class,
        ]);
    }
}
