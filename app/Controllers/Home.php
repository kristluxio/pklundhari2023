<?php

namespace app\controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
                'title' => 'home',
                'isi'   =>  'v_home',
        ];
        echo view('layout/v_wrapper' ,$data);

    }
}
