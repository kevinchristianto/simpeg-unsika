<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganModel extends Model
{
    protected $table = 'tbl_golongan';
    protected $primaryKey = 'golongan';
    protected $useTimestamps = true;
}
