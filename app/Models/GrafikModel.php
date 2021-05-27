<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';

    public function grafik()
    {
        $grafiklulus = $this->db->query("SELECT (thlulus - thmasuk) as total from alumni");

        $hasil = [];
        if (!empty($grafiklulus)) {
            foreach ($grafiklulus->getResultArray() as $key) {
                $hasil[] = $key;
            }
        }
        return $hasil;
    }
}
