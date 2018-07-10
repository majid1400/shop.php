<?php
namespace App\Middleware;

class Security extends \App\Middleware\BaseMiddlewares{

    function handel($request)
    {
        return $request;
    }
}