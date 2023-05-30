<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("user_group")->insert([
            [
                'id' => 1,
                'nama' => 'ADMIN',
            ],
            [
                'id' => 2,
                'nama' => 'KEPALA DINAS',
            ],
        ]);
    }
}
