<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuktiTransfer extends Model
{
   	protected $table = 'tb_bukti_transfer';
    protected $fillable = ['transaksi_id','user_id','img_url_bukti','img_real_bukti'];

    public function transaksi(){
    	return $this->hasOne('App\Models\Transaction','id','template_id');
    }
}
