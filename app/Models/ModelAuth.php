<?php
namespace App\Models;
use CodeIgniter\Model;
Class ModelAuth Extends Model
{
    public function save_register ($data)
    {
        $this->db->table('user')->insert($data);
         
    }
    public function login($password, $email)
    {
        return $this->db->table('user')->where([
            'password'=>$password,
            'email'=>$email,
        ])->get()->getRowArray();
    }
}
