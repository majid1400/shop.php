<?php
namespace App\Middleware;

class Security extends \App\Middleware\BaseMiddlewares{

    function handel($request)
    {
        echo 'Im middleware<br>';
        return $request;
    }
}