<?php
namespace App\Models;
use CodeIgniter\Model;

class Home_Model extends Model
{
    protected $table = 'product_home';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'info', 'image', 'category', 'liked'];
}
