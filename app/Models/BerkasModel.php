<?php namespace App\Models;
use CodeIgniter\Model;

class BerkasModel Extends Model
{

    public function get_berkas()
    {
        return $this->db->table('berkas')->get()->getResultArray();
    }

    public function  insert_berkas($data)
    {
        return $this->db->table('berkas')->insert($data);
    }

    public function  edit_berkas($id_berkas)
    {
        return $this->db->table('berkas')->where('id_berkas',$id_berkas)->get()->getRowArray(); 
    }
    public function  update_berkas($data, $id_berkas)
    {
        return $this->db->table('berkas')->update($data,array('id_berkas'=> $id_berkas)); 
    }
    public function  delete_berkas($id_berkas)
    {
        return $this->db->table('berkas')->delete(array('id_berkas'=> $id_berkas)); 
    }
}