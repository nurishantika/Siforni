<?php

namespace App\Models;

use CodeIgniter\Model;

class InputPencapaianModel extends Model
{
    protected $table = 'pencapaian';
    protected $primaryKey = 'id_pencapaian';
    protected $allowedFields = ['id_alumni', 'pencapaian', 'thpencapaian', 'despencapaian'];

    public function getPencapaianAlumni($id_alumni)
    {
        return $this->db->table($this->table)
            ->where('id_alumni', $id_alumni)
            ->get()->getResultArray();
    }
}
