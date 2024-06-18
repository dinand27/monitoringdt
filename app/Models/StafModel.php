<?php

namespace App\Models;

use CodeIgniter\Model;

class StafModel extends Model
{
    protected $table      = 'staf';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['name', 'email'];

    public function getStaf($slug=false)
    {
        if($slug== false){
            return $this->findAll();
        }
        return $this->where([
            'id'=>$slug
        ])->first();
    }
}