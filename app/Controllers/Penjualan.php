<?php

namespace App\Controllers;
use App\Models\PenjualanModel;
use App\Models\ProductModel;

class Penjualan extends BaseController
{
    protected $penjualanModel;
    protected $productModel;

    public function __construct()
    {
        $this->penjualanModel = new PenjualanModel();
        $this->productModel = new ProductModel();
    }

    // Menampilkan data penjualan
    public function index()
    {
        $data = [
            'title' => 'Data Penjualan',
            'penjualan' => $this->penjualanModel->get_penjualan(),
            'isi' => 'penjualan/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    // Menambahkan data penjualan
    public function tambah()
    {
        // Ambil daftar produk untuk dropdown
        $data['products'] = $this->productModel->findAll();

        $data['title'] = 'Tambah Penjualan';
        $data['isi'] = 'penjualan/v_tambah';
        echo view('layout/v_wrapper', $data);
    }

    // Simpan data penjualan
    public function save()
    {
        $product = $this->request->getPost('product');
        $jumlah = $this->request->getPost('jumlah');
        $discount = $this->request->getPost('discount');
        $konsumen = $this->request->getPost('konsumen');

        // Validasi input
        if (empty($product) || empty($jumlah) || empty($discount) || empty($konsumen)) {
            session()->setFlashData('error', 'Semua kolom harus diisi!');
            return redirect()->to(base_url('penjualan/tambah'));
        }

        // Ambil data produk berdasarkan id
        $productData = $this->productModel->find($product);

        // Pastikan produk ditemukan
        if (!$productData) {
            session()->setFlashData('error', 'Produk tidak ditemukan');
            return redirect()->to(base_url('penjualan/tambah'));
        }

        $harga = $productData['harga'];

        // Hitung total harga setelah diskon
        $totalHarga = $jumlah * $harga * (1 - $discount / 100);

        // Data untuk disimpan
        $data = [
            'nama_product' => $productData['name_product'],
            'tgl_terjual' => date('Y-m-d'),
            'konsumen' => $konsumen,
            'brand' => $productData['brand'],
            'jumlah' => $jumlah,
            'discount' => $discount,
            'total_harga' => $totalHarga,
        ];

        // Simpan data penjualan
        if ($this->penjualanModel->save_penjualan($data)) {
            session()->setFlashData('success', 'Data Penjualan Berhasil Ditambahkan');
        } else {
            session()->setFlashData('error', 'Gagal menambahkan data penjualan');
        }

        return redirect()->to(base_url('penjualan'));
    }
}
