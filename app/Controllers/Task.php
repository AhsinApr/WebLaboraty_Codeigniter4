<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    public function __construct()
    {
        $this->TaskModel = new TaskModel();
    }
    public function index()
    {

        $task = new TaskModel();
        $data['task'] = $task->findAll();
        return view('admin/halamanadmin', $data);
    }
    public function create()
    {
        return view('admin/halamanadmin');
    }
    public function savetask()
    {
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
        $taks = new TaskModel();
        $dataTaks = $this->request->getFile('taks');
        $fileName = $dataTaks->getRandomName();
        $taks->insert([
            'taks' => $fileName,
            'keterangan' => $this->request->getPost('keterangan'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'kelas' => $this->request->getPost('kelas')


        ]);
        $dataTaks->move('uploads/task/', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to(base_url('Task'));
    }
    public function delete($id_task)
    {

        $this->TaskModel->delete($id_task);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus');
        return redirect()->to('Admin');
    }
}
