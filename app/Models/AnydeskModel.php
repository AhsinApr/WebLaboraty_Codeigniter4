<?php

namespace App\Models;

use CodeIgniter\Model;

class AnydeskModel extends Model
{
    protected $table = "anydesk";
    // protected $returnType = 'object';

    protected $primaryKey = "id_anydesk";
    protected $allowedFields = [
        "nama", "nama_kelompok", "station", "akses_anydesk", "fullaccess", "screensharing", "tanggal", "w_awal", "w_akhir"
    ];
}
