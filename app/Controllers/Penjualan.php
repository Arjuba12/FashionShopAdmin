<?php

namespace App\Controllers;
use App\Models\PenjualanModel;
use Dompdf\Dompdf;


class Penjualan extends BaseController
{
    protected $PenjualanModel;

    public function __construct()
    {
        $this->PenjualanModel = new PenjualanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Penjualan',
            'penjualan' => $this->PenjualanModel->get_penjualan(),
            'isi' => 'penjualan/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data penjualan',
            'isi' => 'penjualan/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'tanggal_penjual' => $this->request->getPost('tanggal_penjual'),
            'nama_konsumen' => $this->request->getPost('nama_konsumen'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga'),
            'diskon' => $this->request->getPost('diskon'),
            'total_harga' => $this->request->getPost('total_harga'),
        ];


        $this->PenjualanModel->insert_penjualan($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('penjualan'));
    }

    public function edit($id_penjualan)
    {
        $data = [
            'title' => 'Edit Data penjualan',
            'penjualan' => $this->PenjualanModel->edit_penjualan($id_penjualan),
            'isi' => 'penjualan/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_penjualan)
    {
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'tanggal_penjual' => $this->request->getPost('tanggal_penjual'),
            'nama_konsumen' => $this->request->getPost('nama_konsumen'),
            'jumlah' => $this->request->getPost('jumlah'),
            'harga' => $this->request->getPost('harga'),
            'diskon' => $this->request->getPost('diskon'),
            'total_harga' => $this->request->getPost('total_harga'),
        ];


        $this->PenjualanModel->update_penjualan($data, $id_penjualan);
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('penjualan'));
    }

    public function delete($id_penjualan)
    {
        $oldpenjualan = $this->PenjualanModel->edit_penjualan($id_penjualan);
        if (!empty($oldpenjualan['gambar']) && file_exists('folder_upload/' . $oldpenjualan['gambar'])) {
            unlink('folder_upload/' . $oldpenjualan['gambar']);
        }

        $this->PenjualanModel->delete_penjualan($id_penjualan);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('penjualan'));
    }

    public function printpdf()
    {
        $data = [
            'penjualan' => $this->PenjualanModel->get_penjualan(),
        ];

        $html = view('penjualan/lap_penjualan', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'laporan-penjualan-' . date('Ymd-His') . '.pdf';
        $dompdf->stream($filename, ['Attachment' => false]);
        exit(0);
    }

}
