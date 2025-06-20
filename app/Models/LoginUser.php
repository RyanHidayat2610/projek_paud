<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginUser extends Model
{
    use HasFactory;

    protected $table = 'login_user'; // <- pastikan sesuai dengan nama tabel

    protected $fillable = [
        'username',
        'email',
        'no_hp',
        'password',
    ];

    public function anak()
    {
        return $this->hasMany(FormulirAnak::class, 'user_id');
    }
}
