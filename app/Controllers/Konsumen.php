<?php

namespace App\Controllers;
use App\Models\konsumenModel;
use Dompdf\Dompdf;


class Konsumen extends BaseController
{
    protected $KonsumenModel;

    public function __construct()
    {
        $this->KonsumenModel = new KonsumenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Konsumen',
            'konsumen' => $this->KonsumenModel->get_konsumen(),
            'isi' => 'konsumen/v_list',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data konsumen',
            'isi' => 'konsumen/v_tambah',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function save()
    {
        $data = [
            'nama_konsumen' => $this->request->getPost('nama_konsumen'),
            'umur' => $this->request->getPost('umur'),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'status' => $this->request->getPost('status'),
            'alamat' => $this->request->getPost('alamat'),
        ];


        $this->KonsumenModel->insert_konsumen($data);
        session()->setFlashdata('success', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('konsumen'));
    }

    public function edit($id_konsumen)
    {
        $data = [
            'title' => 'Edit Data konsumen',
            'konsumen'=> $this->KonsumenModel->edit_konsumen($id_konsumen),
            'isi' => 'konsumen/v_edit',
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function update($id_konsumen)
    {
        $data = [
           'nama_konsumen' => $this->request->getPost('nama_konsumen'),
            'umur' => $this->request->getPost('umur'),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'status' => $this->request->getPost('status'),
            'alamat' => $this->request->getPost('alamat'),
        ];


        $this->KonsumenModel->update_konsumen($data, $id_konsumen);
        session()->setFlashdata('success', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('konsumen'));
    }

    public function delete($id_konsumen)
    {
        $oldkonsumen = $this->KonsumenModel->edit_konsumen($id_konsumen);
        if (!empty($oldkonsumen['gambar']) && file_exists('folder_upload/' . $oldkonsumen['gambar'])) {
            unlink('folder_upload/' . $oldkonsumen['gambar']);
        }

        $this->KonsumenModel->delete_konsumen($id_konsumen);
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('konsumen'));
    }

    public function printpdf()
    {
        $data = [
            'konsumen' => $this->KonsumenModel->get_konsumen(),
        ];

        $html = view('konsumen/lap_konsumen', $data);

        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'laporan-konsumen-' . date('Ymd-His') . '.pdf';
        $dompdf->stream($filename, ['Attachment' => false]);
        exit(0);
    }

}
