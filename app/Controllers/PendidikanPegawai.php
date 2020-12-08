<?php

namespace App\Controllers;

use App\Models\PendidikanPegawaiModel;

class PendidikanPegawai extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PendidikanPegawaiModel();
    }

    public function create()
    {
        $validation = $this->validate([
            'nis' => 'required|numeric|max_length[9]',
            'jenjang' => 'required',
            'institusi' => 'required'
        ]);

        if (!$validation) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('validation', $validation);
        }

        $data = [
            'nis' => $this->request->getPost('nis'),
            'jenjang' => $this->request->getPost('jenjang'),
            'institusi' => $this->request->getPost('institusi'),
            'tgl_ijazah' => empty($this->request->getPost('tgl_ijazah')) ? null : $this->request->getPost('tgl_ijazah'),
            'nomor_ijazah' => empty($this->request->getPost('no_ijazah')) ? null : $this->request->getPost('no_ijazah')
        ];

        return $this->model->insert($data)
            ? redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertSuccess', 'anggota keluarga')
            : redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertFailed', 'anggota keluarga');
    }

    public function update($id)
    {
        $validation = $this->validate([
            'nis' => 'required|numeric|max_length[9]',
            'jenjang' => 'required',
            'institusi' => 'required'
        ]);

        if (!$validation) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('validation', $validation);
        }

        $data = [
            'jenjang' => $this->request->getPost('jenjang'),
            'institusi' => $this->request->getPost('institusi'),
            'tgl_ijazah' => empty($this->request->getPost('tgl_ijazah')) ? null : $this->request->getPost('tgl_ijazah'),
            'nomor_ijazah' => empty($this->request->getPost('no_ijazah')) ? null : $this->request->getPost('no_ijazah')
        ];

        return $this->model->update($id, $data)
            ? redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertSuccess', 'anggota keluarga')
            : redirect()->to('/pegawai/' . $this->request->getPost('nis'))->with('insertFailed', 'anggota keluarga');
    }
}
