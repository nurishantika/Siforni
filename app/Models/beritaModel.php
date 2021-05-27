<?php

namespace App\Models;

use CodeIgniter\Model;

class beritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'kode_berita';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul_berita', 'isi_berita', 'foto_berita'];

    public function getBerita($kode_berita = false)
    {
        if ($kode_berita == false) {
            return $this->findAll();
        }

        return $this->where(['kode_berita' => $kode_berita])->first();
    }
}
