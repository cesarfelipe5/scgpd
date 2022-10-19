<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamento';

    protected $fillable = ['id', 'tipoPagamento', 'valor_pagamento', 'data_pagamento', 'status', 'ordem_servico_id', 'tipo_pagamento_id'];

    public function serviceOrder()
    {
        return $this->hasMany(OrdemServico::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(TipoPagamento::class);
    }
}
