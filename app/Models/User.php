<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'login_user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'reset_token',
        'reset_token_expiry'
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'reset_token_expiry' => 'datetime',
    ];

    // Mengubah identifier default dari 'email' menjadi 'username'
    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
