<?php

namespace App\Models\Cep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CepModel extends Model
{
    use HasFactory;
    protected $table = 'cep_tests';
    protected $fillable = ['cep', 'logradouro', 'complemento', 'bairro', 'localidade', 'uf','ibge','ddd','siafi'];
    
}
