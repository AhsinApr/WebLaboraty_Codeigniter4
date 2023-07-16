<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{

    protected $table                = 'reservasi';
    protected $primaryKey           = 'id_reservasi';
    // protected $returnType           = 'object';
    protected $useTimestamps = false;
    protected $allowedFields        = ['nama', 'nama_user', 'file', 'station', 'waktu_mulai', 'waktu_akhir', 'tanggal_reservasi'];
}
