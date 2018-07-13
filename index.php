<?php
include_once "vendor/autoload.php";
include_once "bootstrap/constans.php";
include_once "bootstrap/init.php";
App\Services\Router\Router::Register();

echo \Carbon\Carbon::today();