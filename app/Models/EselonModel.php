<?php

namespace App\Models;

use CodeIgniter\Model;

class EselonModel extends Model
{
    protected $table = 'master_eselon';
    protected $primaryKey = 'eselon';
    protected $useTimestamps = true;
}
