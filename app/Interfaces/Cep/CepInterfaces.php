<?php

namespace App\Interfaces\Cep;

interface CepInterfaces {
    public function create($data);
    public function verifyRegisterInDb($data);
}