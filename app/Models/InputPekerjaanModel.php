<?php

namespace App\Models;

use CodeIgniter\Model;

class InputPekerjaanModel extends Model
{
    protected $table = 'pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    protected $allowedFields = ['id_alumni', 'periode_bekerja', 'perusahaan'];

    public function getPekerjaanAlumni($id_alumni)
    {
        return $this->db->table($this->table)
            ->where('id_alumni', $id_alumni)
            ->get()->getResultArray();
    }
}
