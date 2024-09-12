<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPinjamanModel extends Model
{
    use HasFactory;

    protected $table = 'laporan_pinjaman'; // Nama tabel sesuai gambar

    protected $fillable = [
        'pinjaman_id',
        'detail_laporan',
        'created_at',
        'updated_at',
    ];

    // Definisi relasi ke tabel Pinjaman (jika diperlukan)
    public function pinjaman()
    {
        return $this->belongsTo(PinjamanModel::class, 'pinjaman_id');
    }
}
