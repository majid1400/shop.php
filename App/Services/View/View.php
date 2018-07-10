<?php

namespace App\Services\View;

class View
{

    public static function load($viewPath, $data = array())
    {
        $viewPath = str_replace(".", "/", $viewPath);
        $fullViewPath = VIEWS . $viewPath . ".php";

        if (file_exists($fullViewPath) and is_readable($fullViewPath)) {
            extract($data);
            include_once $fullViewPath;
        }
    }

    public static function render($viewPath, $data = array())
    {
        $viewPath = str_replace(".", "/", $viewPath);
        $fullViewPath = VIEWS . $viewPath . ".php";

        if (file_exists($fullViewPath) and is_readable($fullViewPath)) {
            extract($data);
            ob_start();
            include $fullViewPath;
            $rendering = ob_get_clean();
            return $rendering;
        }
    }
}