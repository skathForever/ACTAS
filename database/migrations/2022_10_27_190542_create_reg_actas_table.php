<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegActasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_actas', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_tipo');
            $table->string('tema');
            $table->time('hora');
            $table->date('fecha');
            $table->string('relevancia');
            $table->String('scan');
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
        Schema::dropIfExists('reg_actas');
    }
}
