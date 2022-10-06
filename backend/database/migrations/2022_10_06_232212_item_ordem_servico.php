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
        Schema::create('item_ordem_servico', function (Blueprint $table) {
            $table->id();

            $table->float('valorDetran', 15, 2);
            $table->float('valorDespachante', 15, 2);
            $table->date('dataPrazo');

            $table->unsignedBigInteger('fk_ordem_servico');
            $table->unsignedBigInteger('fk_servico_prestado');

            $table->foreign('fk_ordem_servico')->references('id')->on('ordem_servico');
            $table->foreign('fk_servico_prestado')->references('id')->on('servico_prestado');

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
        Schema::dropIfExists('item_ordem_servico');
    }
};
