<?php

namespace App\Controllers;

use App\Models\ReservasiModel;

class Reservasi extends BaseController
{
    public function __construct()
    {

        $this->ReservasiModel = new ReservasiModel();
        $this->db     = \Config\Database::connect();
        $this->builder = $this->db->table('reservasi');
    }
    public function reservasi()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }

        return view('user/reservasi');
    }

    public function savereservasi()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }
        if (!$this->validate([

            'task' => [

                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',

                ]

            ]
        ])) {

            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $reservasi = new ReservasiModel();
        $datafile = $this->request->getFile('reservasi');
        $fileReservasi = $datafile->getRandomName();
        $reservasi->insert([
            'reservasi' => $fileReservasi,
            'nama' => $this->request->getPost('nama'),
            'nama_user' => $this->request->getPost('nama_user'),
            'station' => $this->request->getPost('station'),
            'tanggal_reservasi' => $this->request->getPost('tanggal_reservasi'),
            'waktu_mulai' => $this->request->getPost('waktu_akhir'),
            'waktu_akhir' => $this->request->getPost('waktu_akhir')


        ]);

        $datafile->move('uploads/task/', $fileReservasi);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('user/reservasi'));
    }
}
