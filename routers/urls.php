<?php
return [
    "/" => [
        'method' => 'get|post',
        'target' => 'HomeControler@index',
        'middleware' => 'Security',
    ],
    "/user/orders" => [
        'method' => 'get|post',
        'target' => 'UserControler@orders',
    ],
];