<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AngsuranModel extends Model
{
    use HasFactory;

    protected $table = 'angsuran'; // Nama tabel sesuai gambar

    protected $fillable = [
        'pinjaman_id',
        'jumlah_angsuran',
        'tanggal_angsuran',
        'created_at',
        'updated_at',
    ];

    // Definisi relasi ke tabel Pinjaman (jika diperlukan)
    public function pinjaman()
    {
        return $this->belongsTo(PinjamanModel::class, 'pinjaman_id');
    }
}
