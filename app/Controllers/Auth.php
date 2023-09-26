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
    public function login()
    {
        $data = array(
            'title' => 'Login',
        
        );
        return view('v_login',$data);
    }
    public function cek_login()
    {
        if ($this->validate([
            'email'=>[
                'label'=> 'Email',
                'rules' =>'required',
                'errors' => [
                    'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                ]
                ],
                'password'=> [
                    'label'=> 'Password',
                    'rules' =>'required',
                    'errors' => [
                        'required' =>'{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                    ]
                    ],
        ])) {
            //jika valid
            $password =$this->request->getPost('password');
            $email=$this->request->getPost('email');
            $cek = $this-> ModelAuth->login($password, $email);
            if ($cek) {
                //jika datanya cocok
                session()->set('log', true);
                session()->set('nip', $cek['nip']);
                session()->set('nama', $cek['nama']);
                session()->set('no_hp', $cek['no_hp']);
                session()->set('password', $cek['password']);
                session()->set('role', $cek['role']);
                session()->set('email', $cek['email']);
                //login
                return redirect()->to(base_url('home'));
            }else {
                //jika datanya tidak cocok
                session()->setFlashdata('pesan','login Gagal !!, Cek Username Atau Password Tidak Cocok !!');
                return redirect()->to(base_url('auth/login'));
            }

            }else {
        //jika tidak valid
        session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
        return redirect()->to(base_url('auth/login'));
    }
      }
      public function logout()
      {
        session()->remove('log');
        session()->remove('nip');
        session()->remove('nama');
        session()->remove('no_hp');
        session()->remove('password');
        session()->remove('role');
        session()->remove('email');
        session()->setFlashdata('pesan','Logout Suksess !!');
                return redirect()->to(base_url('auth/login'));
      }

    }
