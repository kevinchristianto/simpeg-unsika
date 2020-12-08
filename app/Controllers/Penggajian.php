<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Penggajian extends BaseController
{
    protected $pegawai;

    public function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Penggajian',
            'penggajian' => 'active'
        ];

        return view('admin/penggajian', $data);
    }
}
