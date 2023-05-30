<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pejabat")->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'tahun' => 2023,
                'nip' => '19650404 199203 1 014',
                'nama' => 'Drs. MASFURI, MM',
                'pangkat' => 'Pembina Utama Muda',
                'jabatan' => 'Kepala Dinas Sosial',
                'jabatan_sebenarnya' => '',
                'status_aktif' => 'Pasif',
                'tingkat' => 'Tingkat B'
            ]
        ]);
    }
}
