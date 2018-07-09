<?php
namespace App\Services\View;

class View{

    public static function load($viewPath, $data)
    {
        $viewPath = str_replace(".","/",$viewPath);
        $fullViewPath = VIEWS.$viewPath.".php";

        if (file_exists($fullViewPath) and is_readable($fullViewPath)){
            extract($data);
            include_once $fullViewPath;
        }
    }
}