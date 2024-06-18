<?php

namespace App\Controllers;

class Home_template extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> 'Halaman Dashboard'
        ];
        
        // echo view('template_admin/header');
        // echo view('template_admin/sidebar');
        // echo view('pages/home');
        // echo view('template_admin/footer');
        return view('pages/home', $data);
    }

    public function erorpage()
    {
        return view('pages/404');
    }



}
