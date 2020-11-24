<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'username', 'mail', 'country,', 'code-postal', 'telephone', 'adress', 'identifient', 'password'];
}
