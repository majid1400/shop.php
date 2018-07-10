<?php
return [
    "/" => [
        'method' => 'get|post',
        'target' => 'HomeControler@index',
        'middleware' => 'Security',
    ],
    "/contact" => [
        'method' => 'get',
        'target' => 'HomeControler@contact',
    ],
    "/user/orders" => [
        'method' => 'get|post',
        'target' => 'UserControler@orders',
    ],
    "/user/register" => [
        'method' => 'get|post',
        'target' => 'UserControler@register',
        'middleware' => 'Security',
    ],
];