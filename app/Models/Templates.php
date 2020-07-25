<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
   protected $table = 'tb_templates';
    protected $fillable = ['template_id','link_download','real_path','size','deleted_at','updated_by'];
}
