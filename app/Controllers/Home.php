<?php

namespace App\Controllers;

Class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi' => 'v_home'
        ];

        echo view('layout/v_wrapper', $data);
    }

}
