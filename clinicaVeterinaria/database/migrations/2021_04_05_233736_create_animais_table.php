<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido')->nullable(true);
            $table->string('raca');
            $table->string('especie');
            $table->decimal('peso');
            $table->string('cor');
            $table->date('nascimento');
            $table->enum('doenca', ['Sim', 'Não']);
            $table->string('descDoenca')->nullable(true);
            $table->enum('cirurgia', ['Sim', 'Não']);
            $table->string('descCirurgia')->nullable(true);
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('animais');
    }
}
