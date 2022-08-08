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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idTimeVisitante')->constrained('times');
            $table->foreignId('idTimeCasa')->constrained('times');
            $table->foreignId('idCampeonato')->constrained('campeonatos');
            $table->integer('golsTimeCasa');
            $table->integer('golsTimeVisitante');
            $table->integer('fase');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
};
