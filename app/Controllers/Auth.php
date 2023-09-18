<?php

namespace App\Controllers;

Class Auth Extends BaseController
{
    public function __construct ()
    {
        helper('form');
    }
    public function register()
    {
        $data = array(
            'title' => 'Register',
        
        );
        return view('v_register',$data);
    }
}