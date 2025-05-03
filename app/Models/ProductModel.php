<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    public function get_product()
    {
        return $this->db
            ->table('tb_product')
            ->get()
            ->getResultArray();
    }

    public function insert_product($data)
    {
        return $this->db
            ->table('tb_product')
            ->insert($data);
    }

    public function edit_product($id_product)
    {
        return $this->db
            ->table('tb_product')
            ->where('id_product', $id_product)
            ->get()
            ->getRowArray();
    }

    public function update_product($data, $id_product)
    {
        return $this->db
            ->table('tb_product')
            ->where('id_product', $id_product)
            ->update($data);
    }

    public function delete_product($id_product)
    {
        return $this->db
            ->table('tb_product')
            ->where('id_product', $id_product)
            ->delete();
    }
}
