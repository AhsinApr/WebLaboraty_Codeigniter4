<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ["username", "nama", "password", "salt", "role"];
    protected $useTimestamps = false;

    public function getanydesk($nama)
    {
        $builder = $this->db->table('anydesk');
        $builder->select('anydesk.nama, anydesk.akses_anydesk');
        $builder->join('user', 'anydesk.nama_user = user.nama', "left");
        $builder->where('user.nama', $nama);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getanydesk1($username)
    {
        $builder = $this->db->table('anydesk');
        $builder->select('anydesk.nama, anydesk.nama_kelompok,anydesk.tanggal,anydesk.w_awal,anydesk.w_akhir,anydesk.fullaccess,anydesk.screensharing, anydesk.akses_anydesk,anydesk.station');
        $builder->join('user', 'anydesk.nama = user.username');
        $builder->where('user.username', $username);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function geteruskdesk($username)
    {
        $builder = $this->db->table('ruskdesk');
        $builder->select('ruskdesk.nama, ruskdesk.nama_kelompok,ruskdesk.tanggal,ruskdesk.w_awal,ruskdesk.w_akhir,ruskdesk.password,ruskdesk.akses_ruskdesk,ruskdesk.station');
        $builder->join('user', 'ruskdesk.nama = user.username');
        $builder->where('user.username', $username);
        $data = $builder->get()->getResult();
        return $data;
    }
}
