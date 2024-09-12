<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('pinjaman')->insert([
            [
                'user_id' => 1, // Asumsikan id 1 untuk pengguna tertentu
                'jumlah' => 5000000,
                'tanggal_pinjaman' => '2024-01-15',
            ],
            [
                'user_id' => 2, // Asumsikan id 2 untuk pengguna lain
                'jumlah' => 10000000,
                'tanggal_pinjaman' => '2024-02-10',
            ],
        ]);
    }
}


