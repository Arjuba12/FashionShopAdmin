<?php

namespace App\Models;
use CodeIgniter\Model;

class KonsumenModel extends Model
{
    public function get_konsumen()
    {
       return $this->db
       ->table('tb_konsumen')
       ->get()
       ->getResultArray();
    }

    public function insert_konsumen($data)
    {
       return $this->db
       ->table('tb_konsumen')
       ->insert($data);
    }

    public function edit_konsumen($id_konsumen)
    {
       return $this->db
       ->table('tb_konsumen')
       ->where('id_konsumen', $id_konsumen)
       ->get()
       ->getRowArray();
    }

    public function update_konsumen($data, $id_konsumen)
    {
       return $this->db
       ->table('tb_konsumen')
       ->update($data, array('id_konsumen' => $id_konsumen));
    }

    public function delete_konsumen($id_konsumen)
    {
       return $this->db
       ->table('tb_konsumen')
       ->delete(array('id_konsumen' => $id_konsumen));
    }
}
