<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\JadwalModel;

class Jadwal Extends BaseController
{

    protected $JadwalModel;

    public function __construct()
    {
        $this->JadwalModel = new JadwalModel();
    }
    
    function index()
    {
        $data=[
                'title'   => 'List Data Jadwal',
                'jadwal' => $this->JadwalModel->get_jadwal(),
                'isi'    => 'jadwal/v_list_jadwal',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Jadwal',
            'isi'     => 'jadwal/v_tambah_jadwal',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'tgl_jadwal' => $this->request->getPost('tgl_jadwal'),
            'ket_jadwal' => $this->request->getPost('ket_jadwal'),
        ];

        $this->JadwalModel->insert_jadwal($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('jadwal'));
    }
    public function edit($id_jadwal)
    {
        $data=[
            'title'   => 'Edit Data Jadwal',
            'jadwal' => $this->JadwalModel->edit_jadwal($id_jadwal),
            'isi'     => 'jadwal/v_edit_jadwal',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($id_jadwal)
    {
        $data= [
            'tgl_jadwal' => $this->request->getPost('tgl_jadwal'),
            'ket_jadwal' => $this->request->getPost('ket_jadwal'),
        ];

        $this->JadwalModel->update_jadwal($data, $id_jadwal);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('jadwal'));  
    }  
    
    public function delete($id_jadwal)
    {
        $this->JadwalModel->delete_jadwal($id_jadwal);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('jadwal'));  
    }
}   