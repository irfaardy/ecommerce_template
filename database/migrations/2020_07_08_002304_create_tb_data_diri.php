<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDataDiri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_data_diri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id',false);
            $table->text('alamat');
            $table->string('no_hp',25);
            $table->string('no_telp',25)->nullable();
            $table->string('company',25)->nullable();
            $table->string('website',120)->nullable();
            $table->bigInteger('pekerjaan',false);
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
        Schema::dropIfExists('tb_data_diri');
    }
}
