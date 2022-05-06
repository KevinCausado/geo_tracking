<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->bigIncrements('idVehiculo');
            $table->bigInteger('idConductorVehiculo')->unsigned();
            $table->foreign('idConductorVehiculo')->references('idConductor')->on('conductores')->onDelete('cascade');
            $table->string('modeloVehiculo');
            $table->string('anoVehiculo');
            $table->string('matriculaVehiculo');
            $table->string('placaVehiculo');
            // $table->string('nombreConductorVehiculo');
            $table->string('docConductorVehiculo');
            $table->string('docTarjetapropiedadVehiculo');
            $table->string('docTecnicomecanicaVehiculo');
            $table->string('docSoatVehiculo');
            $table->string('tecnicomecanicaVehiculo');
            $table->string('soatVehiculo');
            $table->date('fechavencimientoVehiculo');
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
        Schema::dropIfExists('vehiculos');
    }
};
