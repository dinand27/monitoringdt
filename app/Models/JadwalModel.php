<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table      = 'jadwal';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    // protected $useSoftDeletes = true; 

    protected $allowedFields = ['hari', 'tglkuliah','jam'];
}