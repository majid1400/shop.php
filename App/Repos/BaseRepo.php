<?php

namespace App\Repos;


abstract class BaseRepo
{
    protected static $model;

    public function insert($data)
    {
        return static::$model::insert($data);
    }

    public function find($id)
    {
        return static::$model::find($id);
    }

    public function all()
    {
        return static::$model::all();
    }

//    public function update($data, $id)
//    {
//        return static::$model::update($data, $id);
//    }
//
//    public function delete($id)
//    {
//        return static::$model::delete($id);
//    }

}