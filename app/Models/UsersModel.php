<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Ini memastikan model menggunakan tabel 'users'

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = true; // Untuk menangani 'created_at' dan 'updated_at'
}
