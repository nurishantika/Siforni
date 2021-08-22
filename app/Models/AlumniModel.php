<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['npm', 'nama', 'thmasuk', 'thlulus', 'alamat', 'notelp', 'notelp_ortu', 'noijazah', 'email', 'email_cadangan', 'thbekerja', 'thbekerja2', 'perusahaan', 'perusahaan2', 'fotoalumni', 'facebook', 'instagram', 'linkedin', 'twitter', 'ipk', 'semester', 'judulskripsi', 'bidangminat', 'abstrak', 'pencapaian', 'thpencapaian', 'despencapaian', 'transkrip'];

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

    public function getDetail($id = null)
    {
        $this->join('pekerjaan', 'alumni.id = pekerjaan.id_alumni', 'LEFT');
        if ($id != null) {
            $this->where(['id' => $id]);
        }
        $result = $this->findAll();
        return $result;
    }

    public function getAlumniDetail($id)
    {
        return $this->db->table($this->table)
            ->join('pekerjaan', 'pekerjaan.id_alumni = alumni.id', 'RIGHT')
            ->join('pencapaian', 'pencapaian.id_alumni = alumni.id', 'RIGHT')
            ->where(['alumni.id', $id])
            ->get()->getResultArray();
    }
}
