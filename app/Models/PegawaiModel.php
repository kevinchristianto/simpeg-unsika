<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = 'master_pegawai';
    protected $primaryKey = 'nis';
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
            ->join('master_jenis_pegawai', 'master_jenis_pegawai.id = master_pegawai.jenis_pegawai', 'left')
            ->join('master_jabatan_pegawai', 'master_jabatan_pegawai.id = master_pegawai.jabatan_pegawai', 'left')
            ->join('master_status_pegawai', 'master_status_pegawai.id = master_pegawai.status_pegawai', 'left')
            ->join('master_status_aktif', 'master_status_aktif.id = master_pegawai.status_aktif', 'left')
            ->join('master_unit_kerja', 'master_unit_kerja.id = master_pegawai.unit_kerja', 'left')
            ->join('master_jabatan_fungsional', 'master_jabatan_fungsional.id = master_pegawai.jabatan_fungsional', 'left')
            ->join('master_golongan', 'master_golongan.gol_ruang = master_pegawai.golongan', 'left');

        $condition = empty($search)
            ? $builder
            : $builder->groupStart()
            ->like('nis', $search)
            ->orLike('nama_pegawai', $search)
            ->groupEnd();

        return $condition;

        // return $this->db->table('master_pegawai')
        //     ->join('master_jenis_pegawai', 'master_jenis_pegawai.id = master_pegawai.jenis_pegawai', 'left')
        //     ->join('master_jabatan_pegawai', 'master_jabatan_pegawai.id = master_pegawai.jabatan_pegawai', 'left')
        //     ->join('master_status_pegawai', 'master_status_pegawai.id = master_pegawai.status_pegawai', 'left')
        //     ->join('master_status_aktif', 'master_status_aktif.id = master_pegawai.status_aktif', 'left')
        //     ->join('master_unit_kerja', 'master_unit_kerja.id = master_pegawai.unit_kerja', 'left')
        //     ->join('master_jabatan_fungsional', 'master_jabatan_fungsional.id = master_pegawai.jabatan_fungsional', 'left')
        //     ->join('master_golongan', 'master_golongan.golongan = master_pegawai.golongan', 'left')
        //     ->like('nama_pegawai', $search, 'both')
        //     ->orderBy($order, $dir)
        //     ->limit($length, $start)
        //     ->get()->getResultObject();
    }
}


// SELECT master_pegawai.nis, master_pegawai.nama_pegawai, master_jenis_pegawai.nama_jenis_pegawai, master_jabatan_pegawai.nama_jabatan_pegawai, master_status_pegawai.nama_status_pegawai, master_status_aktif.status_aktif, master_unit_kerja.nama_unit_kerja, master_jabatan_fungsional.nama_jabatan_fungsional, master_golongan.pangkat FROM master_pegawai LEFT JOIN master_jenis_pegawai ON master_jenis_pegawai.id = master_pegawai.jenis_pegawai LEFT JOIN master_jabatan_pegawai ON master_jabatan_pegawai.id = master_pegawai.jabatan_pegawai LEFT JOIN master_status_pegawai ON master_status_pegawai.id = master_pegawai.status_pegawai LEFT JOIN master_status_aktif ON master_status_aktif.id = master_pegawai.status_aktif LEFT JOIN master_unit_kerja ON master_unit_kerja.id = master_pegawai.unit_kerja LEFT JOIN master_jabatan_fungsional ON master_jabatan_fungsional.id = master_pegawai.jabatan_fungsional LEFT JOIN master_golongan ON master_golongan.golongan = master_pegawai.golongan