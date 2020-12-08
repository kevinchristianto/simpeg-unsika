<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class KGB extends BaseController
{
    protected $pegawai;

    public function __construct()
    {
        $this->pegawai = new PegawaiModel();
    }

    public function index()
    {
        // Get 2 years ago
        $year = strtotime('-2 year', time());
        $year = date('Y-m-d', $year);

        $data = [
            'title' => 'Kenaikan Gaji Berkala',
            'kgb' => 'active',
            'data' => $this->pegawai
                ->join('master_unit_kerja', 'master_unit_kerja.id = master_pegawai.unit_kerja')
                ->where('master_pegawai.tgl_sk_sp <= ', $year)
                ->orderBy('tgl_sk_sp', 'DESC')
                ->findAll()
        ];

        return view('admin/kgb', $data);
    }

    public function checkDaily()
    {
        $year = strtotime('-2 year', time());
        $year = date('Y-m-d', $year);
        $pegawai = $this->pegawai->where('master_pegawai.tgl_sk_sp', $year)->findAll();
        if (count($pegawai) > 0) {
            $listPegawai = '';
            foreach ($pegawai as $row) {
                $listPegawai = $listPegawai . '<li style="font-size: 14px; line-height: 1.2; mso-line-height-alt: 17px;">' . $row['nama_pegawai'] . '</li>';
            }
            $mail = \Config\Services::email();

            $mail->setTo('kevinchristianto22@gmail.com');
            $mail->setFrom('christiantok12@gmail.com', 'Pegawai Naik Golongan');

            $mail->setSubject('Ada Pegawai Naik Golongan Hari Ini');
            $mail->setMessage('
            <html>
                <h1>Pegawai Baru Naik Golongan</h1>
                <p>Ada pegawai baru naik golongan hari ini:</p>
                <ol>
                    ' . $listPegawai . '
                </ol>
                <p>Silakan konfirmasi ke pegawai yang bersangkutan, terima kasih.</p>
            </html>
            ');

            // Send email
            $mail->send();

            // if ($mail->send()) {
            //     echo 'Hehe';
            // } else {
            //     $data = $mail->printDebugger(['headers']);
            //     print_r($data);
            // }
        }
    }
}
