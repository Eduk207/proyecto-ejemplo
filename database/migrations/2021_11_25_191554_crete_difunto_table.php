<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteDifuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difunto', function (Blueprint $table) {
            $table->date('fecha_muerte');
            $table->string('lugar_muerte');
            $table->string('causa');
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
        Schema::dropIfExists('difunto');
    }
}
