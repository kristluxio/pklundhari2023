<?php
namespace App\Models;
use CodeIgniter\Model;
Class ModelAuth Extends Model
{
    public function save_register ($data)
    {
        $this->db->table('user')->insert($data);
         
    }
}
