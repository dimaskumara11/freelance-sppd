<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlamatSkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("alamat_skpd")->insert([
            [
                'id' => 1,
                'nama_skpd' => 'DINAS SOSIAL',
                'alamat' => '	Jl. MT. Haryono No. 64 Telp./Fax (0283) 6177495 Telp. (0283) 673122',
                'kode_pos' => 'BREBES - 52212',
            ]
        ]);
    }
}
