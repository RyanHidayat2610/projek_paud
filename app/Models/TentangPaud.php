<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TentangPaud extends Model
{
    protected $table = 'tentang_paud';
    protected $primaryKey = 'id_tentangkami';
    public $timestamps = false;

    protected $fillable = ['judul', 'deskripsi'];
}
