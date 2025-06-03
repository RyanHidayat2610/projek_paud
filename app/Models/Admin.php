<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin'; // Nama tabel kamu

    protected $primaryKey = 'id_admin';

    public $timestamps = false;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // override password field untuk autentikasi
    public function getAuthPassword()
    {
        return $this->kata_sandi;
    }
}
