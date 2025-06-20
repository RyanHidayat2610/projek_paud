<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramHome extends Model
{
    use HasFactory;

    protected $table = 'program_home'; // atau nama tabel kamu
    protected $fillable = ['title', 'desc', 'gambar'];
}
