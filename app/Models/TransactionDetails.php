<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    protected $table = "tb_details_transaksi";
    protected $fillable = ['transaksi_id','template_id','harga','discount'];

    public function template()
    {
    	return $this->hasOne('App\Models\TemplateApp','id','template_id');
    }
}
