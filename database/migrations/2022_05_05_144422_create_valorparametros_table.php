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
        Schema::create('valorparametros', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->bigIncrements('idvalorParametro');
            $table->bigInteger('idParametro')->unsigned();
            $table->foreign('idvalorParametro')->references('idParametro')->on('parametros')->onDelete('cascade');
            $table->string('nombrevalorParametro');
            $table->tinyInteger('estadovalorParametro');
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
        Schema::dropIfExists('valorparametros');
    }
};
