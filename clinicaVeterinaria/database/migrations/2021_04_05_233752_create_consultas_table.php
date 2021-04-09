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
            $table->increments('id');
            $table->date('data');
            $table->string('sintomas');
            $table->string('tratamento');
            $table->enum('exame', ['Sim', 'Não']);
            $table->string('descExame')->nullable(true);
            $table->integer('animais_id')->unsigned();
            $table->foreign('animais_id')->references('id')->on('animais');
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
        Schema::dropIfExists('consultas');
    }
}
