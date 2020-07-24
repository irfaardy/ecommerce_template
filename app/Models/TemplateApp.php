<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateApp extends Model
{
    protected $table = 'tb_template_app';
    protected $fillable = ['sku','nama','category_id','theme_id','deskripsi','link_demo','price','discount','updated_by'];
}
