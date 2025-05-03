<?php

namespace App\Models;
use CodeIgniter\Model;

class SupplierModel extends Model
{
    public function get_supplier()
    {
       return $this->db
       ->table('tb_supplier')
       ->get()
       ->getResultArray();
    }

    public function insert_supplier($data)
    {
       return $this->db
       ->table('tb_supplier')
       ->insert($data);
    }

    public function edit_supplier($id_supplier)
    {
       return $this->db
       ->table('tb_supplier')
       ->where('id_supplier', $id_supplier)
       ->get()
       ->getRowArray();
    }

    public function update_supplier($data, $id_supplier)
    {
       return $this->db
       ->table('tb_supplier')
       ->update($data, array('id_supplier' => $id_supplier));
    }

    public function delete_supplier($id_supplier)
    {
       return $this->db
       ->table('tb_supplier')
       ->delete(array('id_supplier' => $id_supplier));
    }
}
