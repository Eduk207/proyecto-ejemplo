<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteReoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reo', function (Blueprint $table) {
            $table->id('codigo_reo');
            $table->string('ci',10)->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nacionalidad');
            $table->date('fecha_nac');
            $table->string('lugar_nac');
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
        Schema::dropIfExists('reo');
    }
}
