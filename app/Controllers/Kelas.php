<?php

namespace App\Controllers;

class Kelas extends BaseController
{
    public function index()
    {
        echo view('template_admin/header');
        echo view('template_admin/sidebar');
        echo view('pages/v_kelas');
        echo view('template_admin/footer');
    }


}
