<?php

namespace App;

use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone_number', 'password', 'role',
    ];
}
