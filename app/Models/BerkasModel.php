<?php

namespace App\Models;

use CodeIgniter\Model;

class BerkasModel extends Model
{

    protected $table                = 'berkas';
    protected $primaryKey           = 'id_berkas';
    protected $returnType           = 'object';
    protected $useTimestamps = true;
    protected $allowedFields        = ['id_berkas', 'software', 'berkas', 'nama', 'nama_user', 'w_akhir', 'w_awal', 'tanggal', 'station'];

    public function getIdberkas($id_berkas)
    {
        return $this->where(['id_berkas' => $id_berkas])->first();
    }
}
