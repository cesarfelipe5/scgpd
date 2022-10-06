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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('genero', 1);
            $table->string('cpf', 11);
            $table->string('rg', 15);
            $table->string('cep', 8);
            $table->string('logradouro');
            $table->string('numero', 5);
            $table->string('bairro', 25);
            $table->string('uf', 2);
            $table->string('cidade', 25);
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
        Schema::dropIfExists('cliente');
    }
};
