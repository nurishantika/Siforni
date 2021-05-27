<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{

    protected $table = 'nilai';

    public function getNilai($id_nilai = null)
    {
        $this->join('alumni', 'alumni.id = nilai.id_alumni', 'LEFT');
        if ($id_nilai != null) {
            $this->where(['id_nilai' => $id_nilai]);
        }
        $result = $this->findAll();
        // dd($this->db->getLastQuery());
        return $result;
    }
}
