<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
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
    }
}
