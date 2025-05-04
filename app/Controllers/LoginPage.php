<?php

namespace App\Controllers;

class LoginPage extends BaseController
{
    public function index(): string
    {
        return view('front_end/login_page');
    }
}