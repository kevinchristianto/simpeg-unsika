<?php

namespace App\Controllers;

use App\Models\JenisPegawaiModel;

class JenisPegawai extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new JenisPegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Jenis Pegawai',
            'jenisPegawai' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/jenis_pegawai', $data);
    }
}
