<?php

namespace App\Models;

use CodeIgniter\Model;

class labModel extends Model
{
    protected $table = 'lab';
    protected $primaryKey = 'id_lab';
    protected $allowedFields = ['nama_lab'];

    public function getlab($id_lab = false)
    {
        if ($id_lab == false) {
            return $this->findAll();
        }

        return $this->where(['id_lab' => $id_lab])->first();
    }
}
