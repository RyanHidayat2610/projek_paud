<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nama', 'jenis_guru', 'riwayat_sekolah', 'hobi', 'motivasi', 'foto_profile'
    ];
}

