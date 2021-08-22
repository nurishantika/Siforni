<?php

namespace App\Models;

use CodeIgniter\Model;

class GrafikModel extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';

    public function grafik1()
    {

        $grafiklulus1 = $this->db->query("SELECT COUNT(npm) as total, thmasuk 
        FROM alumni WHERE semester = '7 Semester' GROUP BY thmasuk");

        $hasil1 = [];
        if (!empty($grafiklulus1)) {
            foreach ($grafiklulus1->getResultArray() as $key1) {
                $hasil1[] = $key1;
            }
        }
        return $hasil1;
    }

    public function grafik2()
    {
        $grafiklulus2 = $this->db->query("SELECT COUNT(npm) as total, thmasuk 
        FROM alumni WHERE semester = '8 Semester' GROUP BY thmasuk");

        $hasil2 = [];
        if (!empty($grafiklulus2)) {
            foreach ($grafiklulus2->getResultArray() as $key2) {
                $hasil2[] = $key2;
            }
        }
        return $hasil2;
    }

    public function grafik3()
    {
        $grafiklulus3 = $this->db->query("SELECT COUNT(npm) as total, thmasuk 
        FROM alumni WHERE semester = 'Lebih dari 8 Semester' GROUP BY thmasuk");

        $hasil3 = [];
        if (!empty($grafiklulus3)) {
            foreach ($grafiklulus3->getResultArray() as $key3) {
                $hasil3[] = $key3;
            }
        }
        return $hasil3;
    }
}
