<?php

namespace App\Services\Router;



use App\Core\Request;

class Router{
    private static $base_namespace_controler = "App\Controllers\\";
    private static $base_namespace_middleware = "App\Middleware\\";

    public static function Register()
    {

        $curent_url = self::get_curent_url();



        if (self::is_url_defined($curent_url)){

            # متد فرستاده شده از سمت کاربر درست هست یا نه
            if (!in_array(strtolower($_SERVER["REQUEST_METHOD"]), self::get_url_method($curent_url))){
                echo 'invalid request method';
                exit();
            }

            $Request = new Request();
            # گرفتن میدل ور ها
            $middleware = self::get_url_middleware($curent_url);
            $middlewareClass = self::$base_namespace_middleware.$middleware;
            $middleware_instance = new $middlewareClass;
            $middleware_instance->handel($Request);

            # گرفتن تارگت ها
            list($Controler, $method) = explode("@",self::get_url_target($curent_url));
            $controllerClass = self::$base_namespace_controler.$Controler;
            $controller_instance= new $controllerClass;
            $controller_instance->$method();


        }else{
            echo 'page 404 not find ...';
        }



    }


    # کل url ها را دریافت می کنیم
    public static function get_all_url()
    {
        return include ROUTES . "urls.php";
    }

    # فقط url جاری را دریافت می کنیم
    public static function get_curent_url()
    {
        return strtok($_SERVER['REQUEST_URI'], "?");
    }

    # بررسی می کند url کاربر در urlهای تعریف شده وجود دارد یا خیر
    public static function is_url_defined($key)
    {
        $arr_url = self::get_all_url();
        return array_key_exists($key,$arr_url);
    }

    # متدها را می گیرد
    public static function get_url_method($key)
    {
        $url = self::get_all_url();
        $target_str = $url[$key]['method'];
        $target_part = explode("|",$target_str);
        return $target_part;
    }

    # تارگت ها را می گیرد
    public static function get_url_target($key)
    {
        $url = self::get_all_url();
        $target_str = $url[$key]['target'];
        return $target_str;
    }

    # میدل ور ها را می گیرد
    public static function get_url_middleware($key)
    {
        $url = self::get_all_url();
        $target_str = $url[$key]['middleware'];
        return $target_str;
    }
}