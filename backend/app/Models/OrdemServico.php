<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $table = 'ordem_servico';

    protected $fillable = ['id', 'valorTotal', 'dataEncerramento', 'valordeVenda', 'financiamento', 'conversaoMercoSul', 'veiculo_id'];

    public function vehicle()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
