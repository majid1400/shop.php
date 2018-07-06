<?php
function my_autoload($class){
    $class_path = $class.'.php';
    if (file_exists($class_path) and is_readable($class_path)){
        include_once "$class_path";
    }
}


spl_autoload_register('my_autoload');