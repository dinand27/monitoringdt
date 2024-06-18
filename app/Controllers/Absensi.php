<?php

namespace App\Controllers;

class Datatables extends BaseController
{
    public function index()
    {
        echo view('template_admin/header');
        echo view('template_admin/sidebar');
        echo view('pages/datatables');
        echo view('template_admin/footer');
    }


}
