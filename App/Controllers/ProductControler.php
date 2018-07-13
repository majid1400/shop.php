<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 13/07/2018
 * Time: 11:31 AM
 */

namespace App\Controllers;


use App\Core\Request;
use App\Repos\ProductRepo;
use App\Services\View\View;

class ProductControler
{
    private $productRepo;
    public function __construct()
    {
        $this->productRepo = new ProductRepo();
    }

    public function item(Request $Request)
    {
        $item = $this->productRepo->find($Request->param('id'));
        $data = [
            "product" => $item,
        ];
        View::load('product.single',$data);
    }

}