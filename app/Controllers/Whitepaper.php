<?php

namespace App\Controllers;

class Whitepaper extends BaseController
{
    public function index(): string
    {
        return view('front_end/whitepaper');
    }
}