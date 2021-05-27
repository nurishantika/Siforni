<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'nama', 'thmasuk', 'thlulus', 'alamat', 'notelp', 'notelp_ortu', 'noijazah', 'email', 'email_cadangan', 'thbekerja', 'perusahaan', 'fotoalumni', 'facebook', 'instagram', 'linkedin', 'twitter', 'ipk', 'judulskripsi', 'bidangminat', 'abstrak', 'pencapaian', 'thpencapaian', 'despencapaian', 'transkrip'];

    public function getAlumni($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('alumni')->like('nama', $keyword)->orLike('thmasuk', $keyword)->orLike('thlulus', $keyword);
    }
}
