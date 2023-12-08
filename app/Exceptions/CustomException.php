<?php

namespace App\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\Exception;
use Illuminate\Support\Facades\Log;

class CustomException extends Exception
{

    protected $code;
  
    protected $message;
  
    public function __construct($code, $message)
    {
      $this->code = $code;
      $this->message = $message;
    }
  
  
    public function render($request){
      
        $response['message'] = $this->message;
        $response['code'] = $this->code;
        //$code= (int)$this->code;
        Log::channel('stderr')->info($response); 
      return response()->json($response);
    }
  }
