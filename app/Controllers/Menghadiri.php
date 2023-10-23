<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\MenghadiriModel;

class Menghadiri Extends BaseController
{

    protected $MenghadiriModel;

    public function __construct()
    {
        $this->MenghadiriModel = new MenghadiriModel();
    }
    
    function index()
    {
        $data=[
                'title'   => 'List Data Menghadiri',
                'menghadiri' => $this->MenghadiriModel->get_menghadiri(),
                'isi'    => 'menghadiri/v_list_menghadiri',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Menghadiri',
            'isi'     => 'Menghadiri/v_tambah_menghadiri',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'no_ktp' => $this->request->getPost('no_ktp'),
            
           
        ];

        $this->MenghadiriModel->insert_menghadiri($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('menghadiri'));
    }
    public function edit($id_jadwal)
    {
        $data=[
            'title'   => 'Edit Data Menghadiri',
            'menghadiri' => $this->MenghadiriModel->edit_menghadiri($id_jadwal),
            'isi'     => 'menghadiri/v_edit_menghadiri',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($id_jadwal)
    {
        $data= [
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'no_ktp' => $this->request->getPost('no_ktp'),
        ];

        $this->MenghadiriModel->update_menghadiri($data, $id_jadwal);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('menghadiri'));  
    }  
    
    public function delete($id_jadwal)
    {
        $this->MenghadiriModel->delete_menghadiri($id_jadwal);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('menghadiri'));  
    }
}   