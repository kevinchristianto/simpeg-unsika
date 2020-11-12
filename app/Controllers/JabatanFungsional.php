<?php

namespace App\Controllers;

use App\Models\JabatanFungsionalModel;

class JabatanFungsional extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new JabatanFungsionalModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jabatan Fungsional',
            'jabatanFungsional' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/jabatan_fungsional', $data);
    }
}
