<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice',30)->unique(); /* INV/VII/2020/923912/XZAF */
            $table->bigInteger('id_user',false); 
            $table->float('total_harga',12,2); 
            $table->string('metode_pembayaran',20); 
            $table->boolean('is_verify'); 
            $table->boolean('is_canceled'); 
            $table->timestamp('deleted_at')->nullable();
            $table->string('updated_by',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_transaksi');
    }
}
