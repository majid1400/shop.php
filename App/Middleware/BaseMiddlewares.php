<?php

namespace App\Middleware;

abstract class BaseMiddlewares{
    abstract function handel($request);
}