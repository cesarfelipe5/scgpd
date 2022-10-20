<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoPrestado extends Model
{
    use HasFactory;

    protected $table = 'servico_prestado';

    protected $fillable = ['id', 'nome', 'valorDespachante', 'valorDetran'];

    public function serviceOrderItem()
    {
        return $this->hasMany(ItemOrdemServico::class);
    }
}
