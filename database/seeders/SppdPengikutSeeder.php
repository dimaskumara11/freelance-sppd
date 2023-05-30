<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppdPengikutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sppd_pengikut")->insert([
            [
                'id' => 1,
                'sppd_id' => 1,
                'pns_id' => 2,
            ]
        ]);
    }
}
