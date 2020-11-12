<?php

namespace App\Controllers;

use App\Models\GolonganModel;

class Golongan extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new GolonganModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Golongan',
            'golongan' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/golongan', $data);
    }
}
