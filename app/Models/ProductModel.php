<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'id_product';
    protected $allowedFields = [
        'name_product',
        'desc_product',
        'brand',
        'stock',
        'harga',
        'discount',
        'id_kategori',
        'gambar'
    ];

    public function get_product()
    {
        return $this->db
            ->table('tb_product')
            ->select('tb_product.*, tb_brand.nama_brand, tb_kategori.nama_kategori')
            ->join('tb_brand', 'tb_brand.id_brand = tb_product.brand')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_product.id_kategori')
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
            ->select('tb_product.*, tb_brand.nama_brand, tb_kategori.nama_kategori')
            ->join('tb_brand', 'tb_brand.id_brand = tb_product.brand')
            ->join('tb_kategori', 'tb_kategori.id_kategori = tb_product.id_kategori')
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
