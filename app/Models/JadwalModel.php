<?php namespace App\Models;
use CodeIgniter\Model;

class JadwalModel Extends Model
{

    public function get_jadwal()
    {
        return $this->db->table('jadwal')->get()->getResultArray();
    }

    public function  insert_jadwal($data)
    {
        return $this->db->table('jadwal')->insert($data);
    }

    public function  edit_jadwal($id_jadwal)
    {
        return $this->db->table('jadwal')->where('id_jadwal',$id_jadwal)->get()->getRowArray(); 
    }
    public function  update_jadwal($data, $id_jadwal)
    {
        return $this->db->table('jadwal')->update($data,array('id_jadwal'=> $id_jadwal)); 
    }
    public function  delete_jadwal($id_jadwal)
    {
        return $this->db->table('jadwal')->delete(array('id_jadwal'=> $id_jadwal)); 
    }
}