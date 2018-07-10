<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\Database\DbConnection;
use App\Services\View\View;

class UserControler{
    private $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function orders($Request)
    {
        $order = [
            ['mahsol yek' => 'khodro', 'cost' => 123578],
            ['mahsol yek' => 'praid', 'cost' => 123578],
        ];

        $user = $this->model->findAll();

        View::load('user.order',compact('order','user'));
    }

    public function register($Request)
    {
        $data = [
            'username' => 'ali mohamadi',
        ];
        $msg = View::render("templates.mail.html-read",$data);
        echo $msg;
    }
}