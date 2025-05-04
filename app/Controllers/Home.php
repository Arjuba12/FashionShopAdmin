<?php

namespace App\Controllers;

use App\Models\Home_Model;

class Home extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $data = [
            'title' => 'Home',
            'isi' => 'v_home',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function welcome()
    {

        echo view('welcome_message');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'isi' => 'v_contact',
        ];
        echo view('layout/v_wrapper', $data);
=======

        $productModel = new Home_Model();
        $data['products'] = $productModel->findAll();
        return view('front_end/home', $data);
>>>>>>> 537d74138e02717038b819778f37b04bd53a1086
    }
}
