<?php

namespace App\Controllers;
use App\Models\SupplierModel;


class Supplier extends BaseController
{
    protected $SupplierModel;

    public function __construct()
    {
        $this->SupplierModel = new SupplierModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Data Supplier',
            'supplier' => $this->SupplierModel->get_supplier(),
            'isi' => 'supplier/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data supplier',
            'isi' => 'supplier/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'status' => $this->request->getPost('status'),
            'product' => $this->request->getPost('product'),
            'jumlah' => $this->request->getPost('jumlah'),
            'alamat' => $this->request->getPost('alamat'),
        ];


        $this->SupplierModel->insert_supplier($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('supplier'));
    }

    public function edit($id_supplier)
    {
        $data = [
            'title' => 'Edit Data supplier',
            'supplier'=> $this->SupplierModel->edit_supplier($id_supplier),
            'isi' => 'supplier/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_supplier)
    {
        $data = [
            'status' => $this->request->getPost('status'),
            'product' => $this->request->getPost('product'),
            'jumlah' => $this->request->getPost('jumlah'),
            'alamat' => $this->request->getPost('alamat'),
        ];


        $this->SupplierModel->update_supplier($data, $id_supplier);
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('supplier'));
    }

    public function delete($id_supplier)
    {
        $oldsupplier = $this->SupplierModel->edit_supplier($id_supplier);
        if (!empty($oldsupplier['gambar']) && file_exists('folder_upload/' . $oldsupplier['gambar'])) {
            unlink('folder_upload/' . $oldsupplier['gambar']);
        }

        $this->SupplierModel->delete_supplier($id_supplier);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('supplier'));
    }

}
