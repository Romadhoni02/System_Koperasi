<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AngsuranSeeder extends Seeder
{
    public function run()
    {
        DB::table('angsuran')->insert([
            [
                'pinjaman_id' => 1, // Asumsikan id 1 untuk pinjaman pertama
                'jumlah_angsuran' => 1000000,
                'tanggal_angsuran' => '2024-03-01',
            ],
        ]);
    }
}

