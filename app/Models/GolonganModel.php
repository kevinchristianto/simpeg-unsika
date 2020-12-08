<?php

namespace App\Models;

use CodeIgniter\Model;

class GolonganModel extends Model
{
    protected $table = 'master_golongan';
    protected $primaryKey = 'gol_ruang';
    protected $useTimestamps = true;
}
