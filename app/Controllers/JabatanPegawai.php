<?php

namespace App\Controllers;

use App\Models\JabatanPegawaiModel;

class JabatanPegawai extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new JabatanPegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jabatan Pegawai',
            'jabatanPegawai' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/jabatan_pegawai', $data);
    }
}
