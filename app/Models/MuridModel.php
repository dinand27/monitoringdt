<?php

namespace App\Models;

use CodeIgniter\Model;

class MuridModel extends Model
{
    protected $table      = 'murid';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    // protected $useSoftDeletes = true; 

    protected $allowedFields = ['nama', 'nickname','nohp','hportu', 'tgllahir', 'alamat'];

    public function getMurid($slug=false)
    {
        if($slug== false){
            return $this->findAll();
        }
        return $this->where([
            'id'=>$slug
        ])->first();
    }
}
