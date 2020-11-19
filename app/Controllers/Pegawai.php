<?php

namespace App\Controllers;

use App\Libraries\DatatablesServerSide;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PegawaiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
            'pegawai' => 'active'
        ];

        return view('admin/pegawai', $data);
    }

    public function getPegawai()
    {
        if ($this->request->isAJAX()) {
            $start = $this->request->getGet('start');
            $length = $this->request->getGet('length');
            $search = $this->request->getGet('search[value]');
            $order = PegawaiModel::ORDERABLE[$this->request->getGet('order[0][column]')];
            $dir = $this->request->getGet('order[0][dir]');

            echo json_encode([
                'draw' => $this->request->getGet('draw'),
                'recordsTotal' => $this->model->getAll()->countAllResults(),
                'recordsFiltered' => $this->model->getAll($search)->countAllResults(),
                'data' => $this->model->getAll($search)->orderBy($order, $dir)->limit($length, $start)->get()->getResultObject()
            ]);
        }
    }
}
