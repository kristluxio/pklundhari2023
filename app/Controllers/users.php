<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\UsersModel;

class Users Extends BaseController
{

    protected $UsersModel;

    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }
    
    function index()
    {
        $data=[
                'title'   => 'List Data Users',
                'Users' => $this->UsersModel->get_users(),
                'isi'    => 'users/v_list_users',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Users',
            'isi'     => 'users/v_tambah_users',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'nip' => $this->request->getPost('nip'),
            'nama => $this->request->getPost('nama'),
            'no_hp => $this->request->getPost('no_hp'),
            'password => $this->request->getPost('password'),
            'role => $this->request->getPost('role'),
            'email => $this->request->getPost('email'),
        ];

        $this->UsersModel->insert_users($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('users'));
    }
    public function edit($id_users)
    {
        $data=[
            'title'   => 'Edit Data Jadwal',
            'users' => $this->UsersModel->edit_users($nip),
            'isi'     => 'users/v_edit',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($nip)
    {
        $data= [
            'nip' => $this->request->getPost('nip'),
            'nama => $this->request->getPost('nama'),
            'no_hp => $this->request->getPost('no_hp'),
            'password => $this->request->getPost('password'),
            'role => $this->request->getPost('role'),
            'email => $this->request->getPost('email'),
        ];

        $this->UsersModel->update_users($data, $nip);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
        return redirect()->to(base_url('users'));  
    }  
    
    public function delete($nip)
    {
        $this->UsersModel->delete_users($nip);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
        return redirect()->to(base_url('users'));  
    }
}   