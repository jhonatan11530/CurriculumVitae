<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaVidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_vida', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 80)->nullable();
            $table->string('Foto', 100)->nullable();
            $table->string('FechaNacimiento', 100)->nullable();
            $table->string('Edad', 5)->nullable();
            $table->string('Cargo', 100)->nullable();
            $table->string('Celular',15)->nullable();
            $table->string('Correo', 100)->nullable();
            $table->text('Ubicacion')->nullable();
            $table->text('PerfilProfesional')->nullable();
            $table->text('Habilidades')->nullable();
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
        Schema::dropIfExists('hoja_vida');
    }
}
