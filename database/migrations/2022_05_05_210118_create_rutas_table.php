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
        Schema::create('rutas', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->bigIncrements('idRuta');
            $table->bigInteger('idConductorRuta')->unsigned();
            $table->foreign('idConductorRuta')->references('idConductor')->on('conductores')->onDelete('cascade');
            $table->json('coordenadasRuta');
            $table->date('fechaRuta');
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
        Schema::dropIfExists('rutas');
    }
};
