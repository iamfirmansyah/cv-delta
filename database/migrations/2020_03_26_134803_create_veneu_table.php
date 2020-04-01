<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeneuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veneu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('text1');
            $table->string('text2');
            $table->string('location');
            $table->string('cover');
            $table->string('pict1');
            $table->string('pict2');
            $table->string('pict3');
            $table->string('pict4');
            $table->enum('status',['DRAFT','PUBLISH']);
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
        Schema::dropIfExists('veneu');
    }
}
