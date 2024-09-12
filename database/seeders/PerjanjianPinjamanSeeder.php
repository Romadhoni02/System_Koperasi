<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerjanjianPinjamanSeeder extends Seeder
{
    public function run()
    {
        DB::table('perjanjian_pinjaman')->insert([
            [
                'pinjaman_id' => 1, // Asumsikan id 1 untuk pinjaman pertama
                'detail_perjanjian' => 'Perjanjian untuk pinjaman AG001',
            ],
        ]);
    }
}
