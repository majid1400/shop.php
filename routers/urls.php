<?php
return [
    "/" => [
        'method' => 'get|post',
        'target' => 'HomeControler@index',
        'middleware' => 'Security',
    ],
];