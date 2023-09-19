<?php

namespace App\Controllers;
use App\Models\ModelAuth;
Class Auth Extends BaseController
{
    public function __construct ()
    {
        helper('form');
        $this->ModelAuth= new ModelAuth();
    }
    public function register()
    {
        $data = array(
            'title' => 'Register',
        
        );
        return view('v_register',$data);
    }
    public function save_register()
{
    if ($this->validate([
        'nip'=>[
            'label'=> 'nip',
            'rules' =>'required',
            'errors' => [
                'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
        ]
            ],
            'nama'=>[
                'label'=> 'Nama',
                'rules' =>'required',
                'errors' => [
                    'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                ]
                ],
                'no_hp'=>[
                    'label'=> 'No_Hp',
                    'rules' =>'required',
                    'errors' => [
                        'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                        ]
                    ],
                    'password'=>[
                        'label'=> 'Password',
                        'rules' =>'required',
                        'errors' => [
                            'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                        ]
                    ],
                    'repassword'=>[
                        'label'=> 'Retype Password',
                        'rules' =>'required',
                        'errors' => [
                            'required' =>'{field} Tidak Sama !!!'
                        ]
                        ],
                        'role'=>[
                            'label'=> 'Role',
                            'rules' =>'required',
                            'errors' => [
                                'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                                ]
                            ],
                            'email'=>[
                                'label'=> 'Email',
                                'rules' =>'required',
                                'errors' => [
                                    'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                                ]
                        ]
    ])) {
        //jika valid
        $data = array(
       'nip' =>$this->request->getPost('nip'), 
       'nama' =>$this->request->getPost('nama'), 
       'no_hp' =>$this->request->getPost('no_hp'), 
       'password' =>$this->request->getPost('password'), 
       'role' =>$this->request->getPost('role'), 
       'email' =>$this->request->getPost('email'), 
       
    ); 
    $this->ModelAuth->save_register($data);
    session()->setFlashdata('pesan','Register Berhasil !!!');
    return redirect()->to(base_url('Auth/register'));
    } else {
        //jika tidak valid
        session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
        return redirect()->to(base_url('Auth/register'));
    }
    }
} 
