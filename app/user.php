<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use Notifiable;

    protected $guard = 'user';

    protected $fillable = [
        'name','username', 'email', 'password', 'phone',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
