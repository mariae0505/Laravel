<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\Exception;


class JsonException extends Exception
{
    //
    protected $code;

  protected $message;

  public function __construct($code, $message)
  {
    $this->code = $code;
    $this->message = $message;
  }


  public function render($request){
    $response['message'] = $this->message;
    //return $request;
    //return view('msgerror');
   return response()->json($response, $this->code);
  }



    
}
