<?php

namespace App\Models;

use CodeIgniter\Model;

class labModel extends Model
{
    protected $table = 'lab';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lab'];

    public function getlab($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
