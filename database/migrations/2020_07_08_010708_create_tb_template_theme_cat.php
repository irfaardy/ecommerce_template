<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTemplateThemeCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_template_theme_cat', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('nama',160);
            $table->text('deskripsi')->nullable();
            $table->boolean('hidden_from_category');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('tb_template_theme_cat');
    }
}
