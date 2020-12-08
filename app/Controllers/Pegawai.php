<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\GolonganModel;
use App\Models\JabatanFungsionalModel;
use App\Models\JabatanPegawaiModel;
use App\Models\JenisPegawaiModel;
use App\Models\StatusAktifModel;
use App\Models\StatusPegawaiModel;
use App\Models\UnitKerjaModel;
use App\Models\KeluargaPegawaiModel;
use App\Models\PendidikanPegawaiModel;

class Pegawai extends BaseController
{
    protected $model, $golongan, $jabatanFungsional, $jabatanPegawai, $jenisPegawai, $statusAktif, $statusPegawai, $unitKerja, $keluargaPegawai, $pendidikanPegawai;

    public function __construct()
    {
        $this->model = new PegawaiModel();

        helper('date');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pegawai',
            'pegawai' => 'active'
        ];

        return view('admin/pegawai', $data);
    }

    public function new()
    {
        $this->golongan = new GolonganModel();
        $this->jabatanFungsional = new JabatanFungsionalModel();
        $this->jabatanPegawai = new JabatanPegawaiModel();
        $this->jenisPegawai = new JenisPegawaiModel();
        $this->statusAktif = new StatusAktifModel();
        $this->statusPegawai = new StatusPegawaiModel();
        $this->unitKerja = new UnitKerjaModel();


        $data = [
            'title' => 'Tambah Data Pegawai',
            'pegawai' => 'active',
            'dataGolongan' => $this->golongan->findAll(),
            'dataJabatanFungsional' => $this->jabatanFungsional->findAll(),
            'dataJabatanPegawai' => $this->jabatanPegawai->findAll(),
            'dataJenisPegawai' => $this->jenisPegawai->findAll(),
            'dataStatusAktif' => $this->statusAktif->findAll(),
            'dataStatusPegawai' => $this->statusPegawai->findAll(),
            'dataUnitKerja' => $this->unitKerja->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/pegawai_new', $data);
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

    public function create()
    {
        $validation = $this->validate([
            'nis' => 'required|numeric|is_unique[master_pegawai.nis]|max_length[9]',
            'nama_pegawai' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|valid_date',
            'alamat' => 'required',
            'no_telepon' => 'required|regex_match[/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/]',     // Phone number regex
            'sex' => 'required|in_list[L,P]',
            'agama' => 'required',
            'pendidikan_terakhir' => 'required',
            'status_perkawinan' => 'required',
            'jumlah_anak' => 'required|numeric',
            'tgl_sk_sp' => 'required',
            'status_aktif' => 'required',
            'status_pegawai' => 'required',
            'jenis_pegawai' => 'required',
            'jabatan_pegawai' => 'required',
            'jabatan_fungsional' => 'required',
            'unit_kerja' => 'required',
            'golongan' => 'required'
        ]);

        if (!$validation) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pegawai/new')->withInput()->with('validation', $validation);
        }

        $data = [
            'nis' => $this->request->getPost('nis'),
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'sex' => $this->request->getPost('sex'),
            'agama' => $this->request->getPost('agama'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'jml_anak' => $this->request->getPost('jumlah_anak'),
            'tgl_sk_sp' => $this->request->getPost('tgl_sk_sp'),
            'status_aktif' => $this->request->getPost('status_aktif'),
            'status_pegawai' => $this->request->getPost('status_pegawai'),
            'jenis_pegawai' => $this->request->getPost('jenis_pegawai'),
            'jabatan_pegawai' => $this->request->getPost('jabatan_pegawai'),
            'jabatan_fungsional' => $this->request->getPost('jabatan_fungsional'),
            'unit_kerja' => $this->request->getPost('unit_kerja'),
            'golongan' => $this->request->getPost('golongan')
        ];

        return $this->model->insert($data)
            ? redirect()->to('/pegawai')->with('insertSuccess', 'pegawai')
            : redirect()->to('/pegawai')->with('insertFailed', 'pegawai');
    }

    public function show($nis)
    {
        $this->golongan = new GolonganModel();
        $this->jabatanFungsional = new JabatanFungsionalModel();
        $this->jabatanPegawai = new JabatanPegawaiModel();
        $this->jenisPegawai = new JenisPegawaiModel();
        $this->statusAktif = new StatusAktifModel();
        $this->statusPegawai = new StatusPegawaiModel();
        $this->unitKerja = new UnitKerjaModel();
        $this->keluargaPegawai = new KeluargaPegawaiModel();
        $this->pendidikanPegawai = new PendidikanPegawaiModel();

        $data = [
            'title' => 'Detail Pegawai',
            'pegawai' => 'active',
            'dataGolongan' => $this->golongan->findAll(),
            'dataJabatanFungsional' => $this->jabatanFungsional->findAll(),
            'dataJabatanPegawai' => $this->jabatanPegawai->findAll(),
            'dataJenisPegawai' => $this->jenisPegawai->findAll(),
            'dataStatusAktif' => $this->statusAktif->findAll(),
            'dataStatusPegawai' => $this->statusPegawai->findAll(),
            'dataUnitKerja' => $this->unitKerja->findAll(),
            'dataKeluarga' => $this->keluargaPegawai->where('nis', $nis)->orderBy('status')->findAll(),
            'dataPendidikan' => $this->pendidikanPegawai->where('nis', $nis)->orderBy('jenjang')->findAll(),
            'data' => $this->model->getAll()->where('nis', $nis)->get()->getRowArray(),
            'validation' => \Config\Services::validation(),
            'uri' => $this->request->uri,
            // 'time' => new Time()
        ];

        return view('admin/pegawai_detail', $data);
    }
}
