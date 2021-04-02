<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;
    protected $table = "kerjasama";
    protected $fillable = [
        'nama',
        'instansi',
        'email',
        'alamat',
        'hp',
        'luas_lahan',
        'keterangan',
        'photo'
      ];
}
