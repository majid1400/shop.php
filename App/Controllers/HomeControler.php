<?php

namespace App\Controllers;

use App\Services\View\View;

class HomeControler{
    public static function index($Request)
    {
        $data = [];
        View::load('home.index',$data, 'frontend');
    }

    public static function contact($Request)
    {
        $data = [];
        View::load('home.contact',$data, 'frontend');
    }
}