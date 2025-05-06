<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductHomeModel extends Model
{
    public function get_product()
    {
        return $this->db
            ->table('product_home')
            ->get()
            ->getResultArray();
    }

    public function insert_product($data)
    {
        return $this->db
            ->table('product_home')
            ->insert($data);
    }

    public function edit_product($id)
    {
        return $this->db
            ->table('product_home')
            ->where('id', $id)
            ->get()
            ->getRowArray();
    }

    public function update_product($data, $id)
    {
        return $this->db
            ->table('product_home')
            ->where('id', $id)
            ->update($data);
    }

    public function delete_product($id)
    {
        return $this->db
            ->table('product_home')
            ->where('id', $id)
            ->delete();
    }
}
