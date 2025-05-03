<?php

namespace App\Models;
use CodeIgniter\Model;

class PenjualanModel extends Model
{
    public function get_penjualan()
    {
        return $this->db
            ->table('tb_penjualan')  // Mengakses tabel penjualan
            ->get()  // Mengambil semua data
            ->getResultArray();  // Mengembalikan hasil dalam bentuk array
    }

    public function insert_penjualan($data)
    {
        return $this->db
            ->table('tb_penjualan')  // Mengakses tabel penjualan
            ->insert($data);  // Menyisipkan data penjualan
    }

    public function edit_penjualan($id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')  // Mengakses tabel penjualan
            ->where('id_penjualan', $id_penjualan)  // Kondisi untuk mencari berdasarkan id_penjualan
            ->get()  // Mengambil data
            ->getRowArray();  // Mengembalikan hasil dalam bentuk array tunggal
    }

    public function update_penjualan($data, $id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')  // Mengakses tabel penjualan
            ->where('id_penjualan', $id_penjualan)  // Kondisi untuk mencari berdasarkan id_penjualan
            ->update($data);  // Memperbarui data penjualan berdasarkan id_penjualan
    }

    public function delete_penjualan($id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')  // Mengakses tabel penjualan
            ->where('id_penjualan', $id_penjualan)  // Kondisi untuk mencari berdasarkan id_penjualan
            ->delete();  // Menghapus data penjualan berdasarkan id_penjualan
    }
}
