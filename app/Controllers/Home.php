<?php

namespace App\Controllers;

Class Home Extends BaseController
{
     function index()
    {
        $data=[
                'title'  => 'Judul home',
                'isi'    => 'v_home',
           ];
        echo view('layout/v_wrapper',$data);
    }
     function menu2()
    {
        $data=[
            'title' => 'Judul halaman Menu 2',
            'isi'   =>  'v_menu2',
             ];
    echo view('layout/v_wrapper',$data);
    }
    
     function menu3()
    {
        $data=[
            'title' => 'judul halaman Menu 3',
            'isi'   =>  'v_menu3',
             ];
    echo view('layout/v_wrapper',$data);
    }
     function menu4()
    {
        $data=[
            'title' => 'judul halaman Menu 4',
            'isi'   =>  'v_menu4',
             ];
    echo view('layout/v_wrapper',$data);
    }
}