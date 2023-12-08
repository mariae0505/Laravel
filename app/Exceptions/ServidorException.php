<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Throwable;
use Illuminate\Http\Request;


class ServidorException extends Exception

{
    //
    public function __construct(
        string $message = "Error de Integridad",
    int $code = Response::HTTP_INTERNAL_SERVER_ERROR,
    ?Throwable $previous = null )

    {
        parent::__construct( $message, $code, $previous );
    }



    

}

