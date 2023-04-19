<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoporteEstudioModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soporte_estudio', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->string('Institucion');
            $table->string('NombreTitulo');
            $table->string('TipoEstudio');
            $table->string('SoporteFisico');
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
        Schema::dropIfExists('soporte_estudio');
    }
}
