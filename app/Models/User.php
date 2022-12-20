<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'phone',
        'password'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
