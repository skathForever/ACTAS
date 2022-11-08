<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas', function (Blueprint $table) {
            $table->id('id');
   
            $table->string('tema');
            $table->time('hora');
            $table->date('fecha');
            $table->string('relevancia');
            $table->String('scan');
            $table->timestamps();

            $table->foreignId('id_tipo')
            ->nullable()
            ->constrained('tipo_actas')
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
        Schema::dropIfExists('actas');
    }
}
