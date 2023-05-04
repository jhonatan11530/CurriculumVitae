<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaVidaRefFamily extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_vida_ref_family', function (Blueprint $table) {
            $table->id();
            $table->string('Identificador', 20);
            $table->text('NombreReferenciaPersonal');
            $table->text('CargoReferenciaPersonal');
            $table->text('TelReferenciaPersonal');
            $table->text('PaisReferenciaPersonal');
            $table->text('DepartamentoReferenciaPersonal');
            $table->text('CiudadReferenciaPersonal');
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
        Schema::dropIfExists('hoja_vida_ref_family');
    }
}
