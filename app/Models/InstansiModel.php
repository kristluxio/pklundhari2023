<?php namespace App\Models;
use CodeIgniter\Model;

class InstansiModel Extends Model
{

    public function get_instansi()
    {
        return $this->db->table('instansi')->get()->getResultArray();
    }

    public function  insert_instansi($data)
    {
        return $this->db->table('instansi')->insert($data);
    }

    public function  edit_instansi($id_instansi)
    {
        return $this->db->table('instansi')->where('id_instansi',$id_instansi)->get()->getRowArray(); 
    }
    public function  update_instansi($data, $id_instansi)
    {
        return $this->db->table('instansi')->update($data,array('id_instansi'=> $id_instansi)); 
    }
    public function  delete_instansi($id_instansi)
    {
        return $this->db->table('instansi')->delete(array('id_instansi'=> $id_instansi)); 
    }
}