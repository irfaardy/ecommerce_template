<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTemplateApp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_template_app', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sku',60)->unique();//DSNMA15029332341 contoh
            $table->string('nama',160);
            $table->bigInteger('category_id',false);
            $table->bigInteger('theme_id',false);
            $table->text('deskripsi');
            $table->string('link_demo',500)->nullable();
            $table->float('price',12,2)->default(0);
            $table->float('discount',12,2)->default(0);
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
        Schema::dropIfExists('tb_template_app');
    }
}
