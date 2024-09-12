<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamanModel extends Model
{
    use HasFactory;

    protected $table = 'pinjaman'; // Points to the 'pinjaman' table

    protected $fillable = [
        'user_id',
        'jumlah',
        'tanggal_pinjaman',
    ];

    public $timestamps = true; // Handles 'created_at' and 'updated_at'
}
