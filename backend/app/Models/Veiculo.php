<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $table = 'veiculo';

    protected $fillable = ['id', 'renavan', 'placa', 'modelo', 'marca', 'debitos', 'cliente_id'];

    public function client()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
