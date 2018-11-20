<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('loai')->nullable();
            $table->text('quycach')->nullable();
            $table->text('chatluong')->nullable();
            $table->text('congdung')->nullable();
            $table->text('nanglucdapung')->nullable();
            $table->integer('gia')->nullable();
            $table->string('hinh')->nullable();
            $table->longText('mota')->nullable();
            $table->unsignedInteger('id_catalog');
            $table->foreign('id_catalog')->references('id')->on('catalog');
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
         Schema::dropIfExists('sanpham');
    }
}
