<?php

namespace App\Repositories\Cep;

use App\Interfaces\Cep\CepInterfaces;
use App\Models\Cep\CepModel;
class CepRepository implements CepInterfaces{
   
    protected $entity;

    public function __construct(CepModel $entity)
    {
        $this->entity = $entity;
    }
   
    public function create($data)
    {
        $create = CepModel::create([
            'cep' => preg_replace("/[^0-9]/", "", $data->cep),
            'logradouro' => $data->logradouro,
            'complemento' => $data->complemento,
            'bairro' => $data->bairro,
            'localidade' => $data->localidade,
            'uf' => $data->uf,
            'ibge' => $data->ibge,
            'ddd' => $data->ddd,
            'siafi' => $data->siafi
        ]);

        return $create;
    }

    public function verifyRegisterInDb($data)
    {
        $flag = CepModel::where('cep', $data )->first();

        return $flag;
    }
}