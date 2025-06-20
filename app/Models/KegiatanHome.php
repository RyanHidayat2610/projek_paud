<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanHome extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_home'; // sesuaikan
    protected $fillable = ['desckegiatan', 'gambar'];
}
