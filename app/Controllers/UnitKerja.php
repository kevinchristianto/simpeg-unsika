<?php

namespace App\Controllers;

use App\Models\UnitKerjaModel;

class UnitKerja extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UnitKerjaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Unit Kerja',
            'unitKerja' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/unit_kerja', $data);
    }
}
