<?php

namespace app\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
                'title' => 'Judul home',
                'isi'   =>  'v_home',
           ];
        echo view('layout/v_wrapper',$data);

    }

    public function menu2()
    {
        $data=[
            'title' => 'Judul halaman Menu 2',
            'isi'   =>  'v_menu2',
             ];
    echo view('layout/v_wrapper',$data);
    }
    
    public function menu3()
    {
        $data=[
            'title' => 'judul halaman Menu 3',
            'isi'   =>  'v_menu3',
             ];
    echo view('layout/v_wrapper',$data);
    }
    public function menu4()
    {
        $data=[
            'title' => 'judul halaman Menu 4',
            'isi'   =>  'v_menu4',
             ];
    echo view('layout/v_wrapper',$data);
    }

}
