<?php namespace App\Models;
use CodeIgniter\Model;

class TersangkaModel Extends Model
{

    public function get_tersangka()
    {
        return $this->db->table('tersangka')->get()->getResultArray();
    }

    public function  insert_tersangka($data)
    {
        return $this->db->table('tersangka')->insert($data);
    }

    public function  edit_tersangka($no_ktp)
    {
        return $this->db->table('tersangka')->where('no_ktp',$no_ktp)->get()->getRowArray(); 
    }
    public function  update_tersangka($data, $no_ktp)
    {
        return $this->db->table('tersangka')->update($data,array('no_ktp'=> $no_ktp)); 
    }
    public function  delete_tersangka($no_ktp)
    {
        return $this->db->table('tersangka')->delete(array('no_ktp'=> $no_ktp)); 
    }
}