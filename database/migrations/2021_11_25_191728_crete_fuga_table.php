<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteFugaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuga', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo_reo');
            $table->date('fecha_fuga');
            $table->string('descripcion');
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
        Schema::dropIfExists('fuga');
    }
}
