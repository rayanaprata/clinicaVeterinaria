<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->integer('animais')->unsigned();
            $table->foreign('animais')->references('id')->on('animais');
            $table->increments('id');
            $table->date('data');
            $table->string('sintomas');
            $table->string('tratamento');
            $table->enum('exame', ['Sim', 'Não']);
            $table->string('descExame')->nullable(true);
            $table->primary(['id', 'animais_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
