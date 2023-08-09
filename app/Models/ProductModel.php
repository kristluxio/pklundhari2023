<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel Extends Model
{

    function get_product()
    {
        return $this->db->table('product')->get()->getResultArray();
    }

}

