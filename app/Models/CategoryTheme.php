<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTheme extends Model
{
	use SoftDeletes;
    protected $table = 'tb_template_theme_cat';
    protected $fillable = ['nama','deskripsi','hidden_from_category'];
}
