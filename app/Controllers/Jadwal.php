<?php

namespace App\Controllers;
use App\Models\JadwalModel;

class Jadwal extends BaseController
{
    public function index()
    {
        
        $jModel = new JadwalModel() ;
        $alldata = $jModel->findAll();

       
        // return view('pages/v_jadwal', ['alldata' => $alldata]);

        echo view('template_admin/header');
        echo view('template_admin/sidebar');
        echo view('pages/v_jadwal',[
            'alldata' => $alldata,
            'title' => 'Jadwal Mengajar Seminggu'
    
    ]);
        echo view('template_admin/footer');


    }


}
