<?php

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    public function get_admin()
    {
       return $this->db
       ->table('tb_admin')
       ->get()
       ->getResultArray();
    }

    public function insert_admin($data)
    {
       return $this->db
       ->table('tb_admin')
       ->insert($data);
    }

    public function edit_admin($id_admin)
    {
       return $this->db
       ->table('tb_admin')
       ->where('id_admin', $id_admin)
       ->get()
       ->getRowArray();
    }

    public function update_admin($data, $id_admin)
    {
       return $this->db
       ->table('tb_admin')
       ->update($data, array('id_admin' => $id_admin));
    }

    public function delete_admin($id_admin)
    {
       return $this->db
       ->table('tb_admin')
       ->delete(array('id_admin' => $id_admin));
    }
}
