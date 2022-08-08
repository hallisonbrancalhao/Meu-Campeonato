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
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 64);
            $table->foreignId('idCampeonato')->constrained('campeonatos')->nullable();
            $table->integer('GP');
            $table->integer('GS');
            $table->integer('pontos');
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
        Schema::table('times', function (Blueprint $table){
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
        });
    }
};
