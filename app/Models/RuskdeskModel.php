<?php

namespace App\Models;

use CodeIgniter\Model;

class RuskdeskModel extends Model
{
    protected $table = "ruskdesk";
    // protected $returnType = 'object';

    protected $primaryKey = "id_ruskdesk";
    protected $allowedFields = [
        "nama", "nama_kelompok", "station", "akses_ruskdesk", "password", "tanggal", "w_awal", "w_akhir"
    ];
}
