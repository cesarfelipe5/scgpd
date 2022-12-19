<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPagamento extends Model
{
    use HasFactory;

    protected $table = 'tipo_pagamento';

    protected $fillable = ['id', 'nome'];

    public function payment()
    {
        return $this->hasMany(Pagamento::class);
    }
}
