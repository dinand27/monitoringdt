<?php

namespace App\Controllers;
use App\Models\StafModel;

class Staf extends BaseController
{
    public function index()
    {
        $datastaf= new StafModel();
        $staf= $datastaf->findAll();
        $data= [
            'title' =>'Data Staf Pengajar',
            'staf' =>$staf
        ];
        
        echo view('template_admin/header');
        echo view('template_admin/sidebar');
        echo view('pages/v_staf',$data);
        echo view('template_admin/footer');
    }

    public function detail($slug)
    {
        $datastaf= new StafModel();
        $data= [
            'title'=>'Detail Staf',
            'staf'=>$datastaf->getStaf($slug)
        ];
        // dd($data);
        return view('pages/detailstaf');
        
    }


}
