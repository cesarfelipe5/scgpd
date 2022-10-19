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

            $table->unsignedBigInteger('ordem_servico_id');
            $table->unsignedBigInteger('servico_prestado_id');

            $table->foreign('ordem_servico_id')->references('id')->on('ordem_servico');
            $table->foreign('servico_prestado_id')->references('id')->on('servico_prestado');

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
