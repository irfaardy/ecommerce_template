<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "tb_transaksi";
    protected $fillable = ['invoice','id_user','link','total_harga','metode_pembayaran','bank_id','is_verify','timeout','is_canceled','deleted_at','updated_by'];

    public function details(){
    	return $this->hasMany('App\Models\TransactionDetails','transaksi_id');
    }
    public function detail(){
    	return $this->hasOne('App\Models\TransactionDetails','transaksi_id');
    }
    public function bank(){
    	return $this->hasOne('App\Models\Bank','id','bank_id');
    }
    public function buktiTF(){
        return $this->hasOne('App\Models\BuktiTransfer','transaksi_id');
    }
}
