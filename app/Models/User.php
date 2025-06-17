<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'login_user';

    protected $fillable = ['name', 'username', 'email', 'password', 'reset_token', 'reset_token_expiry'];
    protected $hidden = ['password'];
    protected $casts = ['reset_token_expiry' => 'datetime'];

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}

