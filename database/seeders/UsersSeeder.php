<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('1234'),
                'role' => 'anggota',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('123'),
                'role' => 'petugas',
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'password' => Hash::make('12345'),
                'role' => 'ketua_koperasi',
            ],
        ]);
    }
}
