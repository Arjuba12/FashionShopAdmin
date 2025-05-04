<?php

namespace App\Controllers;
use App\Models\ProductModel;
use Dompdf\Dompdf;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'product' => $this->ProductModel->get_product(),
            'isi' => 'product/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Produk',
            'isi' => 'product/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'name_product' => $this->request->getPost('name_product'),
            'desc_product' => $this->request->getPost('desc_product'),
            'brand' => $this->request->getPost('brand'),
            'stock' => $this->request->getPost('stock'),
            'harga' => $this->request->getPost('harga'),
            'discount' => $this->request->getPost('discount'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];

        // Handle gambar
        $fileFoto = $this->request->getFile('gambar');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFile = $fileFoto->getRandomName();
            $fileFoto->move('folder_upload', $namaFile);
            $data['gambar'] = $namaFile;
        }

        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('product'));
    }

    public function edit($id_product)
    {
        $data = [
            'title' => 'Edit Data Produk',
            'product'=> $this->ProductModel->edit_product($id_product),
            'isi' => 'product/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_product)
    {
        $data = [
            'name_product' => $this->request->getPost('name_product'),
            'desc_product' => $this->request->getPost('desc_product'),
            'brand' => $this->request->getPost('brand'),
            'stock' => $this->request->getPost('stock'),
            'harga' => $this->request->getPost('harga'),
            'discount' => $this->request->getPost('discount'),
            'id_kategori' => $this->request->getPost('id_kategori'),
        ];

        $fileFoto = $this->request->getFile('gambar');
        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $oldProduct = $this->ProductModel->edit_product($id_product);
            if (!empty($oldProduct['gambar']) && file_exists('folder_upload/' . $oldProduct['gambar'])) {
                unlink('folder_upload/' . $oldProduct['gambar']);
            }

            $namaFile = $fileFoto->getRandomName();
            $fileFoto->move('folder_upload', $namaFile);
            $data['gambar'] = $namaFile;
        }

        $this->ProductModel->update_product($data, $id_product);
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('product'));
    }

    public function delete($id_product)
    {
        $oldProduct = $this->ProductModel->edit_product($id_product);
        if (!empty($oldProduct['gambar']) && file_exists('folder_upload/' . $oldProduct['gambar'])) {
            unlink('folder_upload/' . $oldProduct['gambar']);
        }

        $this->ProductModel->delete_product($id_product);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('product'));
    }

    public function printpdf()
    {
        $data = [
            'product' => $this->ProductModel->get_product(),
        ];

        $html = view('product/lap_product', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'laporan-product-' . date('Ymd-His') . '.pdf';
        $dompdf->stream($filename, ['Attachment' => false]);
        exit(0);
    }
}
