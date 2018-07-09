<?php

namespace App\Controllers;

class HomeControler{
    public static function index($Request)
    {
        var_dump($Request);
        echo 'Hi....';
    }
}