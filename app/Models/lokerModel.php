<?php

namespace App\Models;

use CodeIgniter\Model;

class lokerModel extends Model
{
    protected $table = 'loker';
    protected $primaryKey = 'kode_loker';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_loker', 'foto_loker', 'isi_loker'];

    public function getLoker($kode_loker = false)
    {
        if ($kode_loker == false) {
            return $this->findAll();
        }

        return $this->where(['kode_loker' => $kode_loker])->first();
    }
}
