<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_vida_experiencia', function (Blueprint $table) {
            $table->id();
            $table->string('Identificador',20);
            $table->text('NombreReferenciaLaboral');
            $table->text('FechaEntradaReferenciaLaboral');
            $table->text('FechaSalidaReferenciaLaboral');
            $table->text('CargoReferenciaLaboral');
            $table->text('PaisReferenciaLaboral');
            $table->text('DepartamentoReferenciaLaboral');
            $table->text('CiudadReferenciaLaboral');
            $table->text('FuncionesReferenciaLaboral');
            $table->text('HabilidadesReferenciaLaboral');
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
        Schema::dropIfExists('hoja_vida_experiencia');
    }
}
