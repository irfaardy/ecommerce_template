<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'tb_shopping_cart';
    protected $fillable = ['template_id','user_id'];
}
