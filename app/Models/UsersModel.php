<?php namespace App\Models;
use CodeIgniter\Model;

class UsersModel Extends Model
{

    public function get_users()
    {
        return $this->db->table('users')->get()->getResultArray();
    }

    public function  insert_users($data)
    {
        return $this->db->table('users')->insert($data);
    }

    public function  edit_users($nip)
    {
        return $this->db->table('users')->where('nip',$nip)->get()->getRowArray(); 
    }
    public function  update_users($data, $nip)
    {
        return $this->db->table('users')->update($data,array('nip'=> $nip)); 
    }
    public function  delete_users($nip)
    {
        return $this->db->table('users')->delete(array('nip'=> $nip)); 
    }
}