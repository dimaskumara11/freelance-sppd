<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pns")->insert([
            [
                'id' => 1,
                'nip' => '19650404 199203 1 014',
                'nama' => 'Drs. MASFURI, MM',
                'gol' => 'IV/c',
                'pangkat' => 'Pembina Utama Muda',
                'jabatan' => 'Kepala Dinas Sosial Kabupaten Brebes',
                'eselon' => 'II/b',
                'tingkat' => 'Tingkat B',
            ],
            [
                'id' => 2,
                'nip' => '19670623 199003 1 002',
                'nama' => 'FATKHUROHMAN, SE',
                'gol' => 'III/d',
                'pangkat' => 'Pembina Utama Muda',
                'jabatan' => 'Kasubbag Program dan Keuangan',
                'eselon' => 'IV/a',
                'tingkat' => 'Tingkat C',
            ],
        ]);
    }
}
