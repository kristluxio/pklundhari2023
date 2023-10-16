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

    public function  edit_tersangka($id_berkas)
    {
        return $this->db->table('tersangka')->where('id_berkas',$id_berkas)->get()->getRowArray(); 
    }
    public function  update_tersangka($data, $id_berkas)
    {
        return $this->db->table('tersangka')->update($data,array('id_berkas'=> $id_berkas)); 
    }
    public function  delete_tersangka($id_berkas)
    {
        return $this->db->table('tersangka')->delete(array('id_berkas'=> $id_berkas)); 
    }
}