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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('renavan', 25);
            $table->string('placa', 7);
            $table->string('modelo', 50);
            $table->string('marca', 50);
            $table->float('debitos', 15, 2);

            $table->unsignedBigInteger('fk_cliente_id');
            $table->foreign('fk_cliente_id')->references('id')->on('cliente');

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
        Schema::dropIfExists('veiculo');
    }
};
