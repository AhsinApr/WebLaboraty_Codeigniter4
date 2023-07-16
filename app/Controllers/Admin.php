<?php

namespace App\Controllers;

use App\Models\AnydeskModel;
use App\Models\BerkasdetailModel;
use App\Models\BerkasModel;
use App\Models\ReservasiModel;
use App\Models\RuskdeskModel;
use App\Models\TaskModel;
use Prophecy\Argument\Token\AnyValueToken;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->session = session();
        $this->BerkasModel = new BerkasModel();
        $this->BerkasdetailModel = new BerkasdetailModel();
        $this->AnydeskModel = new AnydeskModel();
        $this->ruskdeskModel = new RuskdeskModel();
        $this->ReservasiModel = new ReservasiModel();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        //cek role dari session
        if ($this->session->get('role') != 1) {
            return redirect()->to('/user');
        }
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();

        $task = new TaskModel();
        $data['task'] = $task->findAll();
        return view('admin/halamanadmin', $data);
    }

    public function viewdownloadfile()
    {

        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();

        return view('admin/downloadfile', $data);
    }

    function download($id_berkas)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id_berkas);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }

    public function beriakses($id_berkas)
    {



        $berkas = $this->BerkasdetailModel->getIdberkas($id_berkas);



        $data = [
            'title' => 'berkas',

            'berkas' => $berkas


        ];

        return view('admin/anydesk', $data);
    }
    public function beriaksesruskdesk($id_berkas)
    {



        $berkas = $this->BerkasdetailModel->getIdberkas($id_berkas);



        $data = [
            'title' => 'berkas',

            'berkas' => $berkas


        ];

        return view('admin/ruskdesk', $data);
    }
    public function saveanydesk()
    {

        $anydesk = new AnydeskModel();

        $anydesk->insert([

            'nama' => $this->request->getPost('nama'),
            'nama_kelompok' => $this->request->getPost('nama_kelompok'),
            'station' => $this->request->getPost('station'),
            'tanggal' => $this->request->getPost('tanggal'),
            'w_awal' => $this->request->getPost('w_awal'),
            'w_akhir' => $this->request->getPost('w_akhir'),
            'akses_anydesk' => $this->request->getPost('akses_anydesk'),
            'fullaccess' => $this->request->getPost('fullaccess'),
            'screensharing' => $this->request->getPost('screensharing'),


        ]);

        session()->setFlashdata('pesan', 'Akses sudah dikirim');
        return redirect()->to(base_url('admin/viewdownloadfile'));
    }
    public function saveruskdesk()
    {

        $ruskdesk = new RuskdeskModel();

        $ruskdesk->insert([

            'nama' => $this->request->getPost('nama'),
            'nama_kelompok' => $this->request->getPost('nama_kelompok'),
            'station' => $this->request->getPost('station'),
            'tanggal' => $this->request->getPost('tanggal'),
            'w_awal' => $this->request->getPost('w_awal'),
            'w_akhir' => $this->request->getPost('w_akhir'),
            'akses_ruskdesk' => $this->request->getPost('akses_ruskdesk'),
            'password' => $this->request->getPost('password'),



        ]);

        session()->setFlashdata('pesan', 'Akses sudah dikirim');
        return redirect()->to(base_url('admin/viewdownloadfile'));
    }
    public function delete($id_berkas)
    {

        $this->BerkasModel->delete($id_berkas);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus');
        return redirect()->to('Admin');
    }
    public function deleteanydesk($nama)
    {

        $this->AnydeskModel->delete($nama);
        session()->setFlashdata('pesan', 'akses sebelumnya berhasil Dihapus');
        return redirect()->to('Admin/viewdownloadfile');
    }
    public function deleteruskdesk($nama)
    {

        $this->ruskdeskModel->delete($nama);
        session()->setFlashdata('pesan', 'akses sebelumnya berhasil Dihapus');
        return redirect()->to('Admin/viewdownloadfile');
    }
}
