<?php

namespace App\Controllers;

use App\Models\Home_Model;

class Home extends BaseController
{
    public function index(): string
    {

        $productModel = new Home_Model();
        $data['products'] = $productModel->findAll();
        return view('front_end/home', $data);
    }
}
