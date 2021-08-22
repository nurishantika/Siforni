<?php

namespace App\Models;

use CodeIgniter\Model;

class PencapaianModel extends Model
{

    protected $table = 'alumni';
    protected $primaryKey = 'id';

    public function getPencapaian($id_pencapaian = null)
    {
        $this->join('pencapaian', 'alumni.id = pencapaian.id_alumni', 'LEFT');
        if ($id_pencapaian != null) {
            $this->where(['id_alumni' => $id_pencapaian]);
        }
        $result = $this->findAll();
        // dd($this->db->getLastQuery());
        return $result;
    }
}
