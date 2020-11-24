<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartdelete extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'user_id'];
}
