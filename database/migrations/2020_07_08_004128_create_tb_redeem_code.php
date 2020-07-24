<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRedeemCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_redeem_code', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('redeem_code',30)->unique();//CX2D-AIWD-WDXC-ASKL
            $table->bigInteger('transaksi_id',false);
            $table->bigInteger('template_id',false);
            $table->boolean('is_disabled');
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
        Schema::dropIfExists('tb_redeem_code');
    }
}
