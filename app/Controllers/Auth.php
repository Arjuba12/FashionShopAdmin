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
        $data = array(
            'title' => 'login',
        );
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
            //Jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_auth->login($username, $password);
            if ($cek) {
                //Jika datanya cocok
                session()->set('log', true);
                session()->set('id', $cek['id']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['level']);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!!,
                Username atau Password Salah !!!');
                return redirect()->to(base_url('auth/index'));
            }
        } else {
            //Jika tidak valid
            session()->setFlashdata('errors',
            \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('username');
        session()->remove('level');

        session()->setFlashdata('pesan', 'Anda Telah Logout !!!');
        return redirect()->to(base_url('home/welcome'));
    }
}