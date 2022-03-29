<?php

namespace App\Http\Controllers\Cep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Cep\CepServices;
use Exception;

class CepSearchingController extends Controller
{
    protected $cepController;

    public function __construct(CepServices $cepController)
    {
        $this->cepController = $cepController;
    }
    public function index(Request $request)
    {
        if ($request->isMethod('Post')) {
            $cep = $request->all();
    
            try {
                $data =  $this->cepController->verifyCepInDB($cep);
                return view('resultpage.index', compact('data'));
            }catch (Exception $e) {
                
                return redirect()->route('error')->with('errors', $e->getMessage());
            }
        }
        return view('principalpage.index');
    }

    public function errors()
    {
        return view ('errors.index');
    }
}
