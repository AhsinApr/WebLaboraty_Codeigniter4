<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{

    protected $table                = 'task';
    protected $primaryKey           = 'id_task';
    protected $returnType           = 'object';
    protected $useTimestamps = true;
    protected $allowedFields        = ['id_task', 'taks', 'keterangan', 'kelas', 'nama_dosen',];

    public function getIdTask($id_task)
    {
        return $this->where(['id_task' => $id_task])->first();
    }
}
