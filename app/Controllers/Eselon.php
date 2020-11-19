<?php

namespace App\Controllers;

use App\Models\EselonModel;

class Eselon extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new EselonModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Eselon',
            'eselon' => 'active',
            'data' => $this->model->findAll()
        ];

        return view('admin/eselon', $data);
    }
}
