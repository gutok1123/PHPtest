<?php

namespace App\Services\Cep;

use App\Interfaces\Cep\CepInterfaces;

class CepServices {
    protected $cepServices;

    public function __construct(CepInterfaces $cepServices)
    {
        $this->cepServices = $cepServices;
    }

    public function verifyCepInDB($data)
    {
        
        $cep_filter = preg_replace("/[^0-9]/", "", $data);

       if($this->cepServices->verifyRegisterInDb($cep_filter['cep']))
       {
         
         return $this->cepServices->verifyRegisterInDb($cep_filter['cep']);
       }

       return $this->create($cep_filter);
       
    }

    public function create($data)
    {
        $cep_filter = preg_replace("/[^0-9]/", "", $data);

        $cep_number = $cep_filter['cep'];

        $url = "http://viacep.com.br/ws/$cep_number/xml/";

        $xml = simplexml_load_file($url);

        return $this->cepServices->create($xml);
    }
}