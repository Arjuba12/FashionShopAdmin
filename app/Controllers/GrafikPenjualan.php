<?php

namespace App\Controllers;

use App\Models\PenjualanModel;

class GrafikPenjualan extends BaseController
{
    protected $penjualanModel;

    public function __construct()
    {
        $this->penjualanModel = new PenjualanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Grafik Penjualan',
            'penjualan' => $this->penjualanModel->get_penjualan_by_month()
        ];

        return view('layout/v_wrapper', [
            'title' => 'Grafik Penjualan',
            'isi' => 'grafik_penjualan/v_grafikPenjualan',
            'penjualan' => $this->penjualanModel->get_penjualan_by_month()
        ]);
        
        
    }
}
