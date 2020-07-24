<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('template_id',false);
            $table->string('link_download',120);//desainin.com/redeem/template contoh
            $table->string('real_path',120);
            $table->float('size',12,2);
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
        Schema::dropIfExists('tb_templates');
    }
}

