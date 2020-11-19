<?php

namespace App\Controllers;

use App\Models\StatusAktifModel;

class StatusAktif extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new StatusAktifModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Status Aktif',
            'statusAktif' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/status_aktif', $data);
    }
}
