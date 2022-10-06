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
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->id();

            $table->float('valorTotal', 15, 2);
            $table->timestamp('dataEncerramento');
            $table->float('valordeVenda', 15, 2);
            $table->string('financiamento', 25);
            $table->string('conversaoMercoSul', 25);

            $table->unsignedBigInteger('fk_veiculo');
            $table->foreign('fk_veiculo')->references('id')->on('veiculo');

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
        Schema::dropIfExists('ordem_servico');
    }
};
