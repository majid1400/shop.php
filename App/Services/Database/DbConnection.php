<?php

namespace App\Services\Database;

use App\Services\Config\Config;

class DbConnection{
    public $conn;

    public function __construct()
    {
        $dbInfo = Config::get('database');
        $this->conn = mysqli_connect($dbInfo['host'],$dbInfo['dbuser'],$dbInfo['dbpass'],$dbInfo['dbname']);

        if (! $this->conn){
            echo 'Connected failure<b>';
            die();
        }
    }

    public function query($sql){
        return $this->conn->query($sql);
    }
}