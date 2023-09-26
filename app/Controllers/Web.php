<?php

namespace App\Controllers;

Class Web Extends BaseController
{
     function index()
    {
        $data=[
                'title' => 'Web',
           ];
        echo view('v_web',$data);
    }
}