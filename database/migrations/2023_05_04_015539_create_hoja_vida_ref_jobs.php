<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaVidaRefJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_vida_ref_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('Identificador', 20);
            $table->text('NombreReferenciaJobs');
            $table->text('CargoReferenciaJobs');
            $table->text('TelReferenciaJobs');
            $table->text('PaisReferenciaJobs');
            $table->text('DepartamentoReferenciaJobs');
            $table->text('CiudadReferenciaJobs');
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
        Schema::dropIfExists('hoja_vida_ref_jobs');
    }
}
