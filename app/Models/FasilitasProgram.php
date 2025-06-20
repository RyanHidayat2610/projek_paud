<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasProgram extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_programs';

    protected $fillable = [
        'title',
        'desc',
        'img',
    ];
}
