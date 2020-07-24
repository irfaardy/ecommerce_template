<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use SoftDeletes;
    protected $table = 'tb_template_platforms';
    protected $fillable = ['nama','deskripsi','hidden_from_category'];
}
