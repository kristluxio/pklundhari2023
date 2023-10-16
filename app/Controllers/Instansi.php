<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\InstansiModel;

class Instansi Extends BaseController
{

    protected $InstansiModel;

    public function __construct()
{
        $this->InstansiModel = new InstansiModel();
}
    
     function index()
    {
        $data=[
                'title'   => 'List Data Instansi',
                'instansi' => $this->InstansiModel->get_instansi(),
                'isi'     => 'instansi/v_list_instansi',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Instansi',
            'isi'     => 'instansi/v_tambah_instansi',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'nama_instansi' => $this->request->getPost('nama_instansi'),
            'ket_instansi' => $this->request->getPost('ket_instansi'),
            'logo_instansi' => $this->request->getPost('logo_instansi'),
        ];

        $this->InstansiModel->insert_instansi($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('instansi'));
    }
    public function edit($id_instansi)
    {
        $data=[
            'title'   => 'Edit Data Instansi',
            'instansi' => $this->InstansiModel->edit_instansi($id_instansi),
            'isi'     => 'instansi/v_edit_instansi',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($id_instansi)
    {
        $data= [
            'nama_instansi' => $this->request->getPost('nama_instansi'),
            'ket_instansi' => $this->request->getPost('ket_instansi'),
            'logo_instansi' => $this->request->getPost('logo_instansi'),
        ];

        $this->InstansiModel->update_instansi($data, $id_instansi);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('instansi'));  
    }  
    
    public function delete($id_instansi)
    {
        $this->InstansiModel->delete_instansi($id_instansi);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('instansi'));  
    }
}