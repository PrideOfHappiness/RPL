<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model{
    protected $name = "user";
    protected $fillable = "userId, nama, no_telp, email, status, gender, password";
}
