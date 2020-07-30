<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateApp extends Model
{
    protected $table = 'tb_template_app';
    protected $fillable = ['sku','nama','category_id','theme_id','deskripsi','link_demo','price','discount','updated_by'];

    public function imagesSingle()
    {
        return $this->hasOne('App\Models\TemplateImage','template_id');
    }
    public function images()
    {
        return $this->hasMany('App\Models\TemplateImage','template_id');
    }
    public function templateFile()
    {
        return $this->hasMany('App\Models\Templates','template_id');
    }
    public function category()
    {
        return $this->hasOne('App\Models\CategoryTheme','id','theme_id');
    }
    
}
