<?php

namespace App\Controllers;
use CodeIgniter\Conroller;
use App\Models\ProductModel;

class Product Extends BaseController
{

    protected $ProductModel;

    public function __construct()
{
        $this->ProductModel = new ProductModel();
}
    
     function index()
    {
        $data=[
                'title'    => 'List Data Product',
                'product'  => $this->ProductModel->get_product(),
                'isi'      => 'product/v_list',
           ];
        echo view('layout/v_wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title'   => 'Tambah Data Product',
            'isi'     => 'product/v_tambah',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function save()
    {
        $data= [
            'prodcut_name' => $this->request->getPost('prodcut_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];

        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success','Data Berhasil Ditambahkan');
        return redirect()->to(base_url('product'));
    }
    public function edit($product_id)
    {
        $data=[
            'title'   => 'Edit Data Product',
            'product'=> $this->ProductModel->edit_product($product_id),
            'isi'     => 'product/v_edit',
       ];
    echo view('layout/v_wrapper',$data);
    }

    public function update($product_id)
    {
        $data= [
            'prodcut_name' => $this->request->getPost('prodcut_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];

        $this->ProductModel->update_product($data, $product_id);
        session()->setFlashdata('success','Data Berhasil Diupdate !!!!');
                return redirect()->to(base_url('product'));  
    }  
    
    public function delete($product_id)
    {
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success','Data Berhasil Dihapus!!!!');
                return redirect()->to(base_url('product'));  
    }
}