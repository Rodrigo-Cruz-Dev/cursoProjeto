<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('protocolo')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('tel3')->nullable();
            $table->string('email')->nullable();
            $table->boolean('concluido')->default(false);
            $table->text('observacao', 600)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
