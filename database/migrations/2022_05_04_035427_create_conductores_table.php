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
        Schema::create('conductores', function (Blueprint $table) {
            $table-> engine="innoDB";
            $table->bigIncrements('idConductor');
            $table->string('nombreConductor');
            $table->string('apellidoConductor');
            $table->string('telefonoConductor');            
            $table->string('direccionConductor');
            $table->integer('nopaseConductor');
            $table->string('paseConductor');
            $table->string('cedulaConductor');
            $table->string('hojavidaConductor');
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
        Schema::dropIfExists('conductores');
    }
};
