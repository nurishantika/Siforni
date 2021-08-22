<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{

    protected $table = 'alumni';
    protected $primaryKey = 'id';

    public function getPekerjaan($id_pekerjaan = null)
    {
        $this->join('pekerjaan', 'alumni.id = pekerjaan.id_alumni', 'LEFT');
        if ($id_pekerjaan != null) {
            $this->where(['id_alumni' => $id_pekerjaan]);
        }
        $result = $this->findAll();
        // dd($this->db->getLastQuery());
        return $result;
    }
}
