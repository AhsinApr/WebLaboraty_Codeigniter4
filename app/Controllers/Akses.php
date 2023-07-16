<?php

namespace App\Controllers;

use App\Models\AksesModel;
use App\Models\AnydeskModel;
use App\Models\UserModel;

class Akses extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->UserModel = new UserModel();
        $this->AnydeskModel = new AnydeskModel();
        $this->AksesModel = new AksesModel();
        $this->db     = \Config\Database::connect();
        $this->builder = $this->db->table('akses');
    }

    public function index()
    {
        $query = $this->db->query("SELECT*FROM akses ORDER BY updated_at DESC LIMIT 1");
        $data['akses'] = $query->getResult();
        return view('user/remotelab', $data);
    }
    public function uploadakses()
    {


        $query = $this->db->query("SELECT*FROM akses ORDER BY updated_at DESC LIMIT 1");
        $data['akses'] = $query->getResult();
        return view('admin/uploadkases', $data);
    }

    public function saveakses()
    {
        // $ = $this->request->getVar('');
        // ruskdeks
        $akses_ruskdesk = $this->request->getVar('akses_ruskdesk');
        $ruskfullacc_distribusi = $this->request->getVar('ruskfullacc_distribusi');


        //testing
        $ruskdesk_testing = $this->request->getVar('ruskdesk_testing');
        $fullaccrusk_testing = $this->request->getVar('fullaccrusk_testing');


        //processing
        $idruskdesk_proccesing = $this->request->getVar('idruskdesk_proccesing');
        $fullaccrusk_proccesing = $this->request->getVar('fullaccrusk_proccesing');


        //handling
        $idruskdesk_handling = $this->request->getVar('idruskdesk_handling');
        $fullaccrusk_handling = $this->request->getVar('fullaccrusk_handling');


        //anydesk
        $akses_anydesk = $this->request->getVar('akses_anydesk');
        $distribusi_fullacc = $this->request->getVar('distribusi_fullacc');
        $distribusi_ss = $this->request->getVar('distribusi_ss');

        //testing
        $idanydesk_testing = $this->request->getVar('idanydesk_testing');
        $anydeskfullacc_testing = $this->request->getVar('anydeskfullacc_testing');
        $anydeskss_testing = $this->request->getVar('anydeskss_testing');

        //proccesing
        $idanydesk_proccesing = $this->request->getVar('idanydesk_proccesing');
        $fullacc_proccesing = $this->request->getVar('fullacc_proccesing');
        $anydeskss_proccesing = $this->request->getVar('anydeskss_proccesing');

        $idanydesk_handling = $this->request->getVar('idanydesk_handling');
        $fullacc_handling = $this->request->getVar('fullacc_handling');
        $anydeskss_handling = $this->request->getVar('anydeskss_handling');




        $data = [
            // '' => $,
            'akses_anydesk' => $akses_anydesk,
            'akses_ruskdesk' => $akses_ruskdesk,
            'ruskfullacc_distribusi' => $ruskfullacc_distribusi,

            'ruskdesk_testing' => $ruskdesk_testing,
            'fullaccrusk_testing' => $fullaccrusk_testing,

            'idruskdesk_proccesing' => $idruskdesk_proccesing,
            'fullaccrusk_proccesing' => $fullaccrusk_proccesing,

            'idruskdesk_handling' => $idruskdesk_handling,
            'fullaccrusk_handling' => $fullaccrusk_handling,





            //anydesk
            'distribusi_fullacc' => $distribusi_fullacc,
            'distribusi_ss' => $distribusi_ss,
            'idanydesk_testing' => $idanydesk_testing,
            'anydeskfullacc_testing' => $anydeskfullacc_testing,
            'anydeskss_testing' => $anydeskss_testing,
            'idanydesk_proccesing' => $idanydesk_proccesing,
            'fullacc_proccesing' => $fullacc_proccesing,
            'anydeskss_proccesing' => $anydeskss_proccesing,
            'idanydesk_handling' => $idanydesk_handling,
            'fullacc_handling' => $fullacc_handling,
            'anydeskss_handling' => $anydeskss_handling,




        ];
        $this->AksesModel->replace($data);
        session()->setFlashdata('pesan', 'Data berhasil update');
        return redirect()->to('Admin');
    }
    public function anydesk()
    {
        $query = $this->db->query("SELECT*FROM akses ORDER BY updated_at DESC LIMIT 1");
        $data['akses'] = $query->getResult();
        return view('user/anydesk', $data);
    }
    public function rustdesk()
    {
        $query = $this->db->query("SELECT*FROM akses ORDER BY updated_at DESC LIMIT 1");
        $data['akses'] = $query->getResult();
        return view('user/rustdesk', $data);
    }
    public function chorme()
    {
        $query = $this->db->query("SELECT*FROM akses ORDER BY updated_at DESC LIMIT 1");
        $data['akses'] = $query->getResult();
        return view('user/chorme', $data);
    }
    public function remote()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }
        if ($this->session->get('role') != 2) {
            return redirect()->to('/admin');
        }

        $data['user'] = $this->session->get('username');
        $data['anydesk'] = $this->UserModel->getanydesk1($data);
        $data1['user1'] = $this->session->get('username');
        $data['ruskdesk'] = $this->UserModel->geteruskdesk($data1);
        return view('user/remotelab', $data);
    }
}
