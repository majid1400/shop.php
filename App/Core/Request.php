<?php

namespace App\Core;

class Request{
    public $method;
    public $uri;
    private $params;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->params = $_REQUEST;
    }

    public function param($key)
    {
        return $this->params[$key];
    }

    public function __get($name)
    {
        if (array_key_exists($name,$this->param)){
            return $this->param($name);
        }
    }
}