<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteReoDelitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reo_delito', function (Blueprint $table) {
            $table->string('situacion');
            $table->foreign('codigo_reo')->references('codigo_reo')->on('reo');
            $table->foreign('codigo_ubicacion')->references('codigo_ubicacion')->on('ubicacion');
            $table->foreign('codigo_delito')->references('codigo_delito')->on('delito');
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
        Schema::dropIfExists('reo_delito');
    }
}
