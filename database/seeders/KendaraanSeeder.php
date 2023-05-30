<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("kendaraan")->insert([
            [
                'id' => 1,
                'no_pol' => 'G 23 G',
                'status_aktif' => 'Aktif',
            ],
            [
                'id' => 2,
                'no_pol' => 'G 137 G',
                'status_aktif' => 'Pasif',
            ],
        ]);
    }
}
