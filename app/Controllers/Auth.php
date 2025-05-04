<?php

namespace App\Controllers;

use App\Models\Model_auth;

class Auth extends BaseController
{
    protected $Model_auth;

    public function __construct()
    {
        helper('form');
        $this->Model_auth = new Model_auth();
    }

    public function index()
    {
        // Jika sudah login, arahkan ke home
        if (session()->get('log')) {
            return redirect()->to(base_url('home'));
        }

        $data = [
            'title' => 'Login',
        ];
        return view('v_login', $data);
    }

    public function login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            // Jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_auth->login($username, $password);

            if ($cek) {
                // Jika data cocok
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('email', $cek['email']);
                session()->set('role', $cek['role']);

                return redirect()->to(base_url('home'));
            } else {
                // Jika login gagal
                session()->setFlashdata('pesan', 'Login Gagal !!! Username atau Password Salah !!!');
                return redirect()->to(base_url('auth/index'));
            }
        } else {
            // Jika validasi gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'))->withInput();
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('username');
        session()->remove('email');
        session()->remove('role');

        session()->setFlashdata('pesan', 'Anda Telah Logout !!!');
        return redirect()->to(base_url('auth/index'));
    }
}
