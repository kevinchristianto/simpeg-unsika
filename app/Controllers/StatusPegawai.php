<?php
namespace App\Controllers;

use App\Models\StatusPegawaiModel;

class StatusPegawai extends BaseController {
    protected $model;

    public function __construct()
    {
        $this->model = new StatusPegawaiModel();
    }

    public function index() {
        $data = [
            'title' => 'Data Status Pegawai',
            'statusPegawai' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/status_pegawai', $data);
    }
}
