<?php

namespace App\Controllers;

use App\Models\KeluargaPegawaiModel;

class KeluargaPegawai extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new KeluargaPegawaiModel();
    }

    public function create()
    {
        $validation = $this->validate([
            'nis' => 'required|numeric|max_length[9]',
            'nama_anggota_keluarga' => 'required',
            'status' => 'required|in_list[Suami/Istri,Anak]',
            'tgl_lahir' => 'required|valid_date'
        ]);

        if (!$validation) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('validation', $validation);
        }

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_anggota_keluarga' => $this->request->getPost('nama_anggota'),
            'status' => $this->request->getPost('status'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir')
        ];

        return $this->model->insert($data)
            ? redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertSuccess', 'anggota keluarga')
            : redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertFailed', 'anggota keluarga');
    }
}
