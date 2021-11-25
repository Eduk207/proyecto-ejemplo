<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteCondenaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condena', function (Blueprint $table) {
            $table->id('codigo_condena');
            $table->string('descripcion');
            $table->date('fecha_condena');
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
        Schema::dropIfExists('condena');
    }
}
