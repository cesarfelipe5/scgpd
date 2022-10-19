<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = ['id', 'nome', 'genero', 'cpf', 'rg', 'cep', 'logradouro', 'numero', 'bairro', 'uf', 'cidade'];

    public function phone()
    {
        return $this->hasMany(Telefone::class);
    }

    public function vehicle()
    {
        return $this->hasMany(Veiculo::class);
    }
}
