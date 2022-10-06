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
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();

            $table->string('tipoPagamento', 50);
            $table->float('valor_pagamento', 15, 2);
            $table->timestamp('data_pagamento');
            $table->char('status');
            $table->unsignedBigInteger('fk_ordem_servico');
            $table->unsignedBigInteger('fk_tipo_pagamento');

            $table->foreign('fk_ordem_servico')->references('id')->on('ordem_servico');
            $table->foreign('fk_tipo_pagamento')->references('id')->on('tipo_pagamento');

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
        Schema::dropIfExists('pagamento');
    }
};
