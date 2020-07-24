<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBuktiTransfer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bukti_transfer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaksi_id');
            $table->bigInteger('user_id');
            $table->float('jumlah',12,2);
            $table->string('img_url_bukti',120);
            $table->string('img_real_bukti',120);
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
        Schema::dropIfExists('tb_bukti_transfer');
    }
}
