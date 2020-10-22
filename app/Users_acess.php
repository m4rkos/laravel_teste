<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_acess extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = ['last_login', 'users_id'];
}
