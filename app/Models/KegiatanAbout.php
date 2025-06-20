<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanAbout extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_about'; // penting, karena nama tabel tidak plural
    protected $fillable = ['gambar', 'keterangan'];
}
