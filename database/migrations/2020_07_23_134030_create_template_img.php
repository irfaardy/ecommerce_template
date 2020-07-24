<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateImg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('template_id',false);
            $table->string('realpath',160)->default('default.jpg');
            $table->string('url',160)->default('default.jpg');
            $table->string('mime',160)->nullable();
            $table->bigInteger('size',false);
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
        Schema::dropIfExists('template_images');
    }
}
