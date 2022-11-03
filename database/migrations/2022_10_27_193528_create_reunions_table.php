<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('id_gamea')
            ->nullable()
            ->constrained('actor_gameas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_externo')
            ->nullable()
            ->constrained('actor_externos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_organizacion')
            ->nullable()
            ->constrained('actor_organizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_urbanizacion')
            ->nullable()
            ->constrained('actor_urbanizacions')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('id_acta')
            ->nullable()
            ->constrained('reg_actas')
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
        Schema::dropIfExists('reunions');
    }
}
