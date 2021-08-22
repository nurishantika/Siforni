<?php

namespace App\Models;

use CodeIgniter\Model;

class SemesterModel extends Model
{
    protected $table = 'semester';
    protected $primaryKey = 'id_semester';

    public function getSemester($id_semester = false)
    {
        if ($id_semester == false) {
            return $this->findAll();
        }

        return $this->where(['id_semester' => $id_semester])->first();
    }
}
