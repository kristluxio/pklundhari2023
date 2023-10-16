<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\TersangkaModel;

class Tersangka Extends BaseController
{

    protected $TersangkaModel;

    public function __construct()
    {
        $this->TersangkaModel = new TersangkaModel();
    }
    
    function index()
    {
        $data=[
                'title'   => 'List Data Tersangka',
                'tersangka' => $this->TersangkaModel->get_tersangka(),
                'isi'    => 'tersangka/v_list_tersangka',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Tersangka',
            'isi'     => 'Tersangka/v_tambah_tersangka',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'no_ktp' => $this->request->getPost('no_ktp'),
            'nama_tersangka' => $this->request->getPost('nama_tersangka'),
           
        ];

        $this->TersangkaModel->insert_tersangka($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('tersangka'));
    }
    public function edit($no_ktp)
    {
        $data=[
            'title'   => 'Edit Data Tersangka',
            'tersangka' => $this->TersangkaModel->edit_tersangka($no_ktp),
            'isi'     => 'tersangka/v_edit_tersangka',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($no_ktp)
    {
        $data= [
            'no_ktp' => $this->request->getPost('no_ktp'),
            'nama_tersangka' => $this->request->getPost('nama_tersangka'),
        ];

        $this->TersangkaModel->update_tersangka($data, $no_ktp);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('tersangka'));  
    }  
    
    public function delete($no_ktp)
    {
        $this->TersangkaModel->delete_tersangka($no_ktp);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('tersangka'));  
    }
}   