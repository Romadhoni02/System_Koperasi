<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanAngsuranModel extends Model
{
    use HasFactory;

    protected $table = 'laporan_angsuran'; // Nama tabel sesuai gambar

    protected $fillable = [
        'angsuran_id',
        'detail_laporan',
        'created_at',
        'updated_at',
    ];

    // Definisi relasi ke tabel Angsuran (jika diperlukan)
    public function angsuran()
    {
        return $this->belongsTo(AngsuranModel::class, 'angsuran_id','id');
    }
}
