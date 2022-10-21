<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $table = 'ordem_servico';

    protected $fillable = ['valorTotal', 'dataEncerramento', 'valorVenda', 'financiamento', 'conversaoMercoSul', 'veiculo_id'];

    public function vehicle()
    {
        return $this->belongsTo(Veiculo::class);
    }

    public function serviceOrderItem()
    {
        return $this->hasMany(ItemOrdemServico::class);
    }
}
