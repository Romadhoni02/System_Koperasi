<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;

    protected $table = 'members'; // This points to the 'members' table

    protected $fillable = [
        'user_id',
        'member_code',
        'registration_date',
    ];

    public $timestamps = true; // To handle 'created_at' and 'updated_at'
}
