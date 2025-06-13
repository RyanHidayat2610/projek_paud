<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'login_admin';

    protected $fillable = [
        'username', 'email', 'password', 'reset_token', 'reset_token_expiry'
    ];

    protected $hidden = ['password'];
}
