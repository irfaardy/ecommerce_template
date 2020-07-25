<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateImage extends Model
{
    protected $table = 'template_images';
    protected $fillable = ['template_id','realpath','url','mime','size'];
}
