<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'tbl_pegawai';
    protected $id = 'nis';
    protected $useTimestamps = true;
    protected $protectFields = false;

    const ORDERABLE = [
        1 => 'nis',
        2 => 'nama_pegawai',
        3 => 'tempat_lahir',
        4 => 'no_telepon',
        5 => 'jabatan_pegawai',
        6 => 'status_pegawai'
    ];

    public function getAll(string $search = '')
    {
        $builder = $this->builder()
            ->join('tbl_jenis_pegawai', 'tbl_jenis_pegawai.id = tbl_pegawai.jenis_pegawai', 'left')
            ->join('tbl_jabatan_pegawai', 'tbl_jabatan_pegawai.id = tbl_pegawai.jabatan_pegawai', 'left')
            ->join('tbl_status_pegawai', 'tbl_status_pegawai.id = tbl_pegawai.status_pegawai', 'left')
            ->join('tbl_status_aktif', 'tbl_status_aktif.id = tbl_pegawai.status_aktif', 'left')
            ->join('tbl_unit_kerja', 'tbl_unit_kerja.id = tbl_pegawai.unit_kerja', 'left')
            ->join('tbl_jabatan_fungsional', 'tbl_jabatan_fungsional.id = tbl_pegawai.jabatan_fungsional', 'left')
            ->join('tbl_golongan', 'tbl_golongan.golongan = tbl_pegawai.golongan', 'left');

        $condition = empty($search)
            ? $builder
            : $builder->groupStart()
            ->like('nis', $search)
            ->orLike('nama_pegawai', $search)
            ->groupEnd();

        return $condition;

        // return $this->db->table('tbl_pegawai')
        //     ->join('tbl_jenis_pegawai', 'tbl_jenis_pegawai.id = tbl_pegawai.jenis_pegawai', 'left')
        //     ->join('tbl_jabatan_pegawai', 'tbl_jabatan_pegawai.id = tbl_pegawai.jabatan_pegawai', 'left')
        //     ->join('tbl_status_pegawai', 'tbl_status_pegawai.id = tbl_pegawai.status_pegawai', 'left')
        //     ->join('tbl_status_aktif', 'tbl_status_aktif.id = tbl_pegawai.status_aktif', 'left')
        //     ->join('tbl_unit_kerja', 'tbl_unit_kerja.id = tbl_pegawai.unit_kerja', 'left')
        //     ->join('tbl_jabatan_fungsional', 'tbl_jabatan_fungsional.id = tbl_pegawai.jabatan_fungsional', 'left')
        //     ->join('tbl_golongan', 'tbl_golongan.golongan = tbl_pegawai.golongan', 'left')
        //     ->like('nama_pegawai', $search, 'both')
        //     ->orderBy($order, $dir)
        //     ->limit($length, $start)
        //     ->get()->getResultObject();
    }
}


// SELECT tbl_pegawai.nis, tbl_pegawai.nama_pegawai, tbl_jenis_pegawai.nama_jenis_pegawai, tbl_jabatan_pegawai.nama_jabatan_pegawai, tbl_status_pegawai.nama_status_pegawai, tbl_status_aktif.status_aktif, tbl_unit_kerja.nama_unit_kerja, tbl_jabatan_fungsional.nama_jabatan_fungsional, tbl_golongan.pangkat FROM tbl_pegawai LEFT JOIN tbl_jenis_pegawai ON tbl_jenis_pegawai.id = tbl_pegawai.jenis_pegawai LEFT JOIN tbl_jabatan_pegawai ON tbl_jabatan_pegawai.id = tbl_pegawai.jabatan_pegawai LEFT JOIN tbl_status_pegawai ON tbl_status_pegawai.id = tbl_pegawai.status_pegawai LEFT JOIN tbl_status_aktif ON tbl_status_aktif.id = tbl_pegawai.status_aktif LEFT JOIN tbl_unit_kerja ON tbl_unit_kerja.id = tbl_pegawai.unit_kerja LEFT JOIN tbl_jabatan_fungsional ON tbl_jabatan_fungsional.id = tbl_pegawai.jabatan_fungsional LEFT JOIN tbl_golongan ON tbl_golongan.golongan = tbl_pegawai.golongan