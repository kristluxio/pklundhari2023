<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\BerkasModel;

class Berkas Extends BaseController
{

    protected $BerkasModel;

    public function __construct()
    {
        $this->BerkasModel = new BerkasModel();
    }
    
    function index()
    {
        $data=[
                'title'   =>'List Data Berkas',
                'berkas' => $this->BerkasModel->get_berkas(),
                'isi'    => 'berkas/v_list_berkas',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Berkas',
            'isi'     => 'berkas/v_tambah_berkas',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'tgl_berkas' => $this->request->getPost('tgl_berkas'),
            'resume_singkat' => $this->request->getPost('resume_singkat'),
            'no_sp_kap' => $this->request->getPost('no_sp_kap'),
            'tgl_sp_kap' => $this->request->getPost('tgl_sp_kap'),
            'file_sp_kap' => $this->request->getPost('file_sp_kap'),
            'no_ba_kap' => $this->request->getPost('no_ba_kap'),
            'file_ba_kap' => $this->request->getPost('file_ba_kap'),
            'no_srt_permintaan' => $this->request->getPost('no_srt_permintaan'),
            'file_srt_permintaan' => $this->request->getPost('file_srt_permintaan'),

        ];

        $this->BerkasModel->insert_berkas($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('berkas'));
    }
    public function edit($id_berkas)
    {
        $data=[ 
            'title'   => 'Edit Data Berkas',
            'berkas' => $this->BerkasModel->edit_berkas($id_berkas),
            'isi'     => 'berkas/v_edit',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($id_berkas)
    {
        $data= [
            'tgl_berkas' => $this->request->getPost('tgl_berkas'),
            'resume_singkat' => $this->request->getPost('resume_singkat'),
            'no_sp_kap' => $this->request->getPost('no_sp_kap'),
            'tgl_sp_kap' => $this->request->getPost('tgl_sp_kap'),
            'file_sp_kap' => $this->request->getPost('file_sp_kap'),
            'no_ba_kap' => $this->request->getPost('no_ba_kap'),
            'file_ba_kap' => $this->request->getPost('file_ba_kap'),
            'no_srt_permintaan' => $this->request->getPost('no_srt_permintaan'),
            'file_srt_permintaan' => $this->request->getPost('file_srt_permintaan'),
        ];

        $this->BerkasModel->update_berkas($data, $id_berkas);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('berkas'));  
    }  
    
    public function delete($id_berkas)
    {
        $this->BerkasModel->delete_berkas($id_berkas);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('berkas'));  
    }
}   