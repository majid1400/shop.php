<?php

namespace App\Controllers;

use App\Models\User;
use App\Repos\UserRepo;
use App\Services\Database\DbConnection;
use App\Services\View\View;

class UserControler{
    private $userRepo;
    public function __construct()
    {
        $this->userRepo = new UserRepo();
    }

    public function orders($Request)
    {
        $users = $this->userRepo::find(1);
        var_dump($users);
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