<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
     protected $table = 'redeem';
    protected $fillable = ['transaction_id','user_id','serial'];
}
