<?php

namespace App\Models;
use CodeIgniter\Model;

class BrandModel extends Model
{
    protected $table = 'tb_brand';
    protected $primaryKey = 'id_brand';
    protected $allowedFields = ['nama_brand'];
}
