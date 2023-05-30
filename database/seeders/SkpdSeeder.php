<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("skpd")->insert([
            [
                'id' => 1,
                'kode' => 'A593',
                'nama' => 'Dinas Sosial Jawa Timur',
            ],
            [
                'id' => 2,
                'kode' => 'A592',
                'nama' => '	Kecamatan Brebes dan Kecamatan Losari',
            ],
        ]);
    }
}
