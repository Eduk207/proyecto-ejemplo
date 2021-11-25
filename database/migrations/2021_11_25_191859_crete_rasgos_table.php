<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteRasgosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rasgos', function (Blueprint $table) {
            $table->string('estatura');
            $table->string('contextura');
            $table->string('color_piel');
            $table->foreign('codigo_reo')->references('codigo_reo')->on('reo');
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
        Schema::dropIfExists('rasgos');
    }
}
