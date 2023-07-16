<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkas extends BaseController
{
    public function index()
    {
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();
        return view('user/uploadfile', $data);
    }

    public function create()
    {
        return view('form_upload');
    }

    public function save()
    {
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

        $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'berkas' => $fileName,
            'nama' => $this->request->getPost('nama'),
            'nama_user' => $this->request->getPost('nama_user'),
            'station' => $this->request->getPost('station'),
            'tanggal' => $this->request->getPost('tanggal'),
            'w_awal' => $this->request->getPost('w_awal'),
            'w_akhir' => $this->request->getPost('w_akhir'),
            'software' => $this->request->getPost('software')


        ]);
        $dataBerkas->move('uploads/berkas/', $fileName);
        session()->setFlashdata('pesan', 'Reservasi Anda sedang diproses');
        return redirect()->to(base_url('User/reservasi'));
    }

    function download($id)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }
}
