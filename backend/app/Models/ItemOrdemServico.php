<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOrdemServico extends Model
{
    use HasFactory;

    protected $table = 'item_ordem_servico';

    protected $fillable = ['id', 'valorDetran', 'valorDespachante', 'dataPrazo', 'ordem_servico_id', 'servico_prestado_id'];

    public function serviceOrder()
    {
        return $this->belongsTo(OrdemServico::class);
    }

    public function serviceProvided()
    {
        return $this->belongsTo(ServicoPrestado::class);
    }
}
