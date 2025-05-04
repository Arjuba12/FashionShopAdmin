<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        $adminModel = new AdminModel();

        $data = [
            'title'  => 'Data Admin',
            'admin'  => $adminModel->get_admin(),
            'isi'    => 'admin/v_list',
        ];

        return view('layout/v_wrapper', $data);
    }
}
