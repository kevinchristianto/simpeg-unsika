<?php

namespace App\Controllers;

use PHPExcel;
use PHPExcel_IOFactory;

use App\Models\PegawaiModel;

class Home extends BaseController
{
	protected $pegawai;

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'dashboard' => 'active'
		];

		// return view('admin/dashboard', $data);
		return view('landing');
	}

	public function importPegawai()
	{
		if ($this->request->getPost('submit') !== null) {
			$file = $this->request->getFile('file');
			if ($file) {
				$this->pegawai = new PegawaiModel();
				$excelReader = new PHPExcel();
				$fileLocation = $file->getTempName();
				$phpExcel = PHPExcel_IOFactory::load($fileLocation);
				$sheet = $phpExcel->getActiveSheet()->toArray(null, true, true, true);

				foreach ($sheet as $id => $data) {
					if ($id < 3) {
						continue;
					}

					$this->pegawai->insert([
						'nis' => $data['B'],
						'nama_pegawai' => $data['C'],
						'tempat_lahir' => $data['D'],
						'tgl_lahir' => $data['E'],
						'no_telepon' => $data['F'],
						'tgl_sk_sp' => $data['H'],
						'jenis_pegawai' => $data['I'],
						'jabatan_pegawai' => $data['J'],
						'status_pegawai' => $data['K'],
						'status_aktif' => $data['L'],
						'pendidikan_terakhir' => $data['W'],
						'unit_kerja' => $data['N'],
						'unit_pelaksana' => $data['O'],
						'jabatan_fungsional' => $data['P'],
						'golongan' => $data['AB'],
						'angka_kredit' => $data['AC'],
						'status_perkawinan' => $data['AD'],
						'sex' => $data['AE'],
						'jml_anak' => $data['AF'],
						'agama' => $data['AG'],
						'alamat' => $data['AH'],
						'nidn' => $data['AS'],
						'nip' => $data['AT']
					]);
				}

				return redirect()->back();
			}
		} else {
			return view('admin/import');
		}
	}
}










// Pegawai complete
// SELECT tbl_pegawai.nis, tbl_pegawai.nama_pegawai, tbl_jenis_pegawai.nama_jenis_pegawai, tbl_jabatan_pegawai.nama_jabatan_pegawai, tbl_status_pegawai.nama_status_pegawai, tbl_status_aktif.status_aktif, tbl_unit_kerja.nama_unit_kerja, tbl_jabatan_fungsional.nama_jabatan_fungsional, tbl_golongan.pangkat FROM tbl_pegawai LEFT JOIN tbl_jenis_pegawai ON tbl_jenis_pegawai.id = tbl_pegawai.jenis_pegawai LEFT JOIN tbl_jabatan_pegawai ON tbl_jabatan_pegawai.id = tbl_pegawai.jabatan_pegawai LEFT JOIN tbl_status_pegawai ON tbl_status_pegawai.id = tbl_pegawai.status_pegawai LEFT JOIN tbl_status_aktif ON tbl_status_aktif.id = tbl_pegawai.status_aktif LEFT JOIN tbl_unit_kerja ON tbl_unit_kerja.id = tbl_pegawai.unit_kerja LEFT JOIN tbl_jabatan_fungsional ON tbl_jabatan_fungsional.id = tbl_pegawai.jabatan_fungsional LEFT JOIN tbl_golongan ON tbl_golongan.golongan = tbl_pegawai.golongan