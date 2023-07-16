<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table = "akses";

    protected $primaryKey = "id_akses";
    protected $allowedFields = [
        "akses_ruskdesk", "akses_anydesk", "ruskfullacc_distribusi",
        "ruskdesk_testing", "fullaccrusk_testing",
        "distribusi_fullacc", "distribusi_ss", "idanydesk_testing",
        "anydeskfullacc_testing", "anydeskss_testing", "idanydesk_proccesing", "fullacc_proccesing",
        "anydeskss_proccesing", "idanydesk_handling", "fullacc_handling",
        "anydeskss_handling", "idruskdesk_proccesing", "fullaccrusk_proccesing",
        "idruskdesk_handling", "fullaccrusk_handling"



    ];
    protected $useTimestamps = true;
}
