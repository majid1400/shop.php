<?php

namespace App\Models;

use App\Services\Database\DbConnection;

abstract class BaseModel{
    protected $conn;
    protected $table;
    protected $primary_key;


    public function __construct()
    {
        $this->conn = new DbConnection();

    }

    public function find($id)
    {
        $sql = "select * from {$this->table} where {$this->primary_key}='$id' ";
        return $this->conn->query($sql);
    }

    public function findAll()
    {
        $sql = "select * from {$this->table}";
        return $this->conn->query($sql);
    }

    public function delete($id)
    {
        $sql = "delete from {$this->table} where {$this->primary_key}='$id' ";
        return $this->conn->query($sql);
    }

}