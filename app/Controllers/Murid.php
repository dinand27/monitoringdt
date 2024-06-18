<?php

namespace App\Controllers;
use App\Models\MuridModel;
class Murid extends BaseController
{
    public function index()
    {
        $muridmodel = new MuridModel();
        $alldata = $muridmodel->getMurid();
        $data=[
            'title'=>'Data Murid Graciella Music',
            'alldata'=> $alldata
        ];


        echo view('template_admin/header');
        echo view('template_admin/sidebar');
        echo view('murid/index',$data);
        echo view('template_admin/footer');
    }

    public function detail($slug)
    {
        $muridmodel = new MuridModel();
        $data= [
            'title'=>'Detail Murid',
            'murid'=>$muridmodel->getMurid($slug)
        ];
        // dd($data);
        return view('murid/detail', $data);
        
    }


}
