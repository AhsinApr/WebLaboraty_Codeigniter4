<?php

namespace App\Controllers;

use App\Models\AksesModel;
use App\Models\AnydeskModel;
use App\Models\BerkasModel;
use App\Models\ReservasiModel;
use App\Models\TaskModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->ReservasiModel = new ReservasiModel();
        $this->BerkasModel = new BerkasModel();

        $this->AnydeskModel = new AnydeskModel();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }

        return view('user/halamanutama');
    }

    public function task()
    {
        $task = new TaskModel();
        $data['task'] = $task->findAll();
        return view('user/task', $data);
    }

    function download($id_task)
    {
        $task = new TaskModel();
        $data = $task->find($id_task);
        return $this->response->download('uploads/task/' . $data->taks, null);
    }


    public function carapenggunaan()
    {

        return view('user/carapenggunaan');
    }
    public function reservasi()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }


        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();



        return view('user/reservasi', $data);
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

            'berkas' => [

                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',

                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new ReservasiModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'berkas' => $fileName,
            'nama' => $this->request->getPost('nama'),
            'nama_user' => $this->request->getPost('nama_user'),
            'station' => $this->request->getPost('station'),
            'tanggal_reservasi' => $this->request->getPost('tanggal_reservasi'),
            'waktu_mulai' => $this->request->getPost('waktu_akhir'),
            'waktu_akhir' => $this->request->getPost('waktu_akhir')


        ]);
        // $dataBerkas->move('uploads/berkas/', $fileName);
        // session()->setFlashdata('success', 'Berkas Berhasil diupload');
        // return redirect()->to(base_url('berkas'));



        dd($berkas);
    }
    public function coba()
    {
        return view('cobacoba');
    }
    public function remote()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }

        $data['user'] = $this->session->get('nama');
        $data['anydesk'] = $this->UserModel->getanydesk($data);

        dd($data);
    }
}
//   'nama' => $this->request->getPost('nama'),
//             'nama_user' => $this->request->getPost('nama_user'),
//             'station' => $this->request->getPost('station'),
//             'tanggal_reservasi' => $this->request->getPost('tanggal_reservasi'),
//             'waktu_mulai' => $this->request->getPost('waktu_akhir'),
//             'waktu_akhir' => $this->request->getPost('waktu_akhir')


// $berkas= $this->request->getFile('berkas');
        // genarate nama random
        // $namafile = $berkas->getRandomName();
        // // pindah ke img
        // $->move('img', $namafile);
        // $file = $namafile;


        // $nama = $this->request->getVar('nama');

        // $nama_user = $this->request->getVar('nama_user');
        // $station = $this->request->getVar('station');
        // $tanggal_reservasi = $this->request->getVar('tanggal_reservasi');
        // $waktu_mulai = $this->request->getVar('waktu_mulai');
        // $waktu_akhir = $this->request->getVar('waktu_akhir');



        // $data = [

        //     'nama' => $nama,
        //     'nama_user' => $nama_user,
        //     'station' => $station,
        //     'tanggal_reservasi' => $tanggal_reservasi,
        //     'waktu_mulai' => $waktu_mulai,
        //     'waktu_akhir' => $waktu_akhir,
        //     'file' => $file

        // ];
        // $this->ReservasiModel->insert($data);
        // session()->setFlashdata('pesan', 'Reservasi Anda Sedang Diproses');
        // return redirect()->to('User/reservasi');