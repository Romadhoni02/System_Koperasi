<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanAngsuranSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan_angsuran')->insert([
            [
                'angsuran_id' => 3, // Asumsikan id 1 untuk angsuran pertama
                'detail_laporan' => 'Laporan untuk angsuran pinjaman AG001',
            ],
        ]);
    }
}

