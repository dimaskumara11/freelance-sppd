<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("sppd")->insert([
            [
                'id' => 1,
                'pns_id' => 1,
                'skpd_id' => 1,
                'kendaraan_id' => 1,
                'dibuat_oleh' => 1,
                'no_agenda' => 1000,
                'tahun' => 2023,
                'tanggal_berangkat' => Carbon::now()->toDateString(),
                'tanggal_kembali' => Carbon::now()->toDateString(),
                'tanggal_sppd' => Carbon::now()->toDateString(),
                'dari_anggaran' => 'Dana Bansos',
                'tujuan' => 'Pengiriman Logistik Bencana Banjir di Kecamatan Jatibarang',
                'pengelola' => 'SEKRETARIAT',
                'status_persetujuan' => 'Setujui',
                'perdin' => 'Dalam',
                'no_surat' => no_surat(env("APP_LETTER_CODE"),1000,Carbon::now()->format("m"),Carbon::now()->format("Y"))
            ]
        ]);
    }
}
