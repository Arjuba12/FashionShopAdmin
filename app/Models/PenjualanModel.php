<?php

namespace App\Models;
use CodeIgniter\Model;

class PenjualanModel extends Model
{
    public function get_penjualan()
    {
        return $this->db
            ->table('tb_penjualan')
            ->get()
            ->getResultArray();
    }

    public function get_penjualan_by_month()
    {
        // Mengambil data penjualan per bulan
        return $this->db->table('tb_penjualan')
            ->select('MONTH(tanggal_penjual) as bulan, SUM(jumlah) as total_penjualan')
            ->groupBy('bulan')
            ->orderBy('bulan', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insert_penjualan($data)
    {
        return $this->db
            ->table('tb_penjualan')
            ->insert($data);
    }

    public function edit_penjualan($id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')
            ->where('id_penjualan', $id_penjualan)
            ->get()
            ->getRowArray();
    }

    public function update_penjualan($data, $id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')
            ->where('id_penjualan', $id_penjualan)
            ->update($data);
    }

    public function delete_penjualan($id_penjualan)
    {
        return $this->db
            ->table('tb_penjualan')
            ->where('id_penjualan', $id_penjualan)
            ->delete();
    }
}
