<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\Exception;
use Illuminate\Support\Facades\Log;

class DatosException extends Exception
{

    protected $code;

    protected $message;
    protected $vista;

    public function __construct($code, $message, $vista)
    {
        $this->code = $code;
        $this->message = $message;
        $this->vista = $vista;
    }
    

    public function render($request)
    {
        if ($this->code = 2023) {
            $response['message'] = 'Imposible Modificar o Eliminar: ya tiene movimientos';

        }
        else {
            $response['message'] = 'Error al Actualizar';

        }



       

        $response['messagehtml'] = $this->message;
        $response['code'] = $this->code;
        $response['vista'] = $this->vista;

        //$code= (int)$this->code;
        Log::channel('stderr')->info($response);
        return view('errors.2023')->with('respuesta', $response);
        //return response()->json($response);
    }
}
