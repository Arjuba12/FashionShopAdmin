<?php

namespace App\Controllers;
use App\Models\ProductHomeModel;


class ProductHome extends BaseController
{
    protected $ProductHomeModel;

    public function __construct()
    {
        $this->ProductHomeModel = new ProductHomeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Produk Proto',
            'product_home' => $this->ProductHomeModel->get_product(),
            'isi' => 'product_home/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data',
            'isi' => 'product_home/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'info' => $this->request->getPost('info'),
            'category' => $this->request->getPost('category'),
            'liked' => $this->request->getPost('liked'),

        ];

        // Handle image
        $fileFoto = $this->request->getFile('image');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFile = $fileFoto->getRandomName();
            $fileFoto->move('img/', $namaFile);
            $data['image'] = $namaFile;
        }

        $this->ProductHomeModel->insert_product($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('product_home'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Produk Proto',
            'product_home'=> $this->ProductHomeModel->edit_product($id),
            'isi' => 'product_home/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'info' => $this->request->getPost('info'),
            'category' => $this->request->getPost('category'),
            'liked' => $this->request->getPost('liked'),

        ];

        $fileFoto = $this->request->getFile('image');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $oldProduct = $this->ProductHomeModel->edit_product($id);
            if (!empty($oldProduct['image']) && file_exists('img/' . $oldProduct['image'])) {
                unlink('img/' . $oldProduct['image']);
            }

            $namaFile = $fileFoto->getRandomName();
            $fileFoto->move('img', $namaFile);
            $data['image'] = $namaFile;
        }

        $this->ProductHomeModel->update_product($data, $id);
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('product_home'));
    }

    public function delete($id)
    {
        $oldProduct = $this->ProductHomeModel->edit_product($id);
        if (!empty($oldProduct['image']) && file_exists('img/' . $oldProduct['image'])) {
            unlink('img/' . $oldProduct['image']);
        }

        $this->ProductHomeModel->delete_product($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('product_home'));
    }


}
