<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('id_gamea')
            ->nullable()
            ->constrained('actorgameas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_externo')
            ->nullable()
            ->constrained('actorexternos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_organizacion')
            ->nullable()
            ->constrained('actororganizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_urbanizacion')
            ->nullable()
            ->constrained('actorurbanizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_acta')
            ->nullable()
            ->constrained('actas')
            ->cascadeOnUpdate()
            ->nullOnDelete();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actors');
    }
}
