<?php namespace App\Models;
use CodeIgniter\Model;

class MenghadiriModel Extends Model
{

    public function get_menghadiri()
    {
        return $this->db->table('menghadiri')->get()->getResultArray();
    }

    public function  insert_menghadiri($data)
    {
        return $this->db->table('menghadiri')->insert($data);
    }

    public function  edit_menghadiri($id_jadwal)
    {
        return $this->db->table('menghadiri')->where('id_jadwal',$id_jadwal)->get()->getRowArray(); 
    }
    public function  update_menghadiri($data, $id_jadwal)
    {
        return $this->db->table('menghadiri')->update($data,array('id_jadwal'=> $id_jadwal)); 
    }
    public function  delete_menghadiri($id_menghadiri)
    {
        return $this->db->table('menghadiri')->delete(array('id_jadwal'=> $id_jadwal)); 
    }
}