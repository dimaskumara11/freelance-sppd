<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("user")->insert([
            [
                'id' => 1,
                'user_group_id' => 1,
                'username' => 'admin',
                'password' => Hash::make("admin"),
            ],
            [
                'id' => 2,
                'user_group_id' => 2,
                'username' => 'kepala_dinas',
                'password' => Hash::make("kepala_dinas"),
            ],
        ]);
    }
}
