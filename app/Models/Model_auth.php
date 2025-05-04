<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    // Method login tanpa properti protected
    public function login($username, $password)
    {
        // Query langsung tanpa properti $table
        return $this->db->table('tb_user') // Menentukan tabel secara langsung
            ->where([
                'username' => $username,
                'password' => $password
            ])
            ->get()
            ->getRowArray(); // Mengambil hasil sebagai array
    }
}
