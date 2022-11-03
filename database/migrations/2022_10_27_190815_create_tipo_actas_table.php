<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_actas', function (Blueprint $table) {
            $table->id('id');
            $table->string('tipo_acta');
            $table->timestamps();

            $table->foreignId('id_tipo')
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
        Schema::dropIfExists('tipo_actas');
    }
}
