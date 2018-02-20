<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'nickname', 'rol', 'email', 'password',
=======
        'name', 'nickname','email', 'password',
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD


=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
}
