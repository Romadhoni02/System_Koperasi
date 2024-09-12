<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanPinjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan_pinjaman')->insert([
            [
                'pinjaman_id' => 1, // Asumsikan id 1 untuk pinjaman pertama
                'detail_laporan' => 'Laporan untuk pinjaman AG001',
            ],
        ]);
    }
}

