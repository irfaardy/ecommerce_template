<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDetailsTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_details_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaksi_id',false);
            $table->bigInteger('template_id',false);
            $table->float('harga',12,2);
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
        Schema::dropIfExists('tb_details_transaksi');
    }
}
