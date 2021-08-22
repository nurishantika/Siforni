<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{

    protected $table = 'nilai';
    protected $primaryKey = 'id_nilai';
    protected $allowedFields = [
        'id_alumni',
        'npm',
        'kalkulus_1',
        'prakt_struktur_data',
        'etika_profesi',
        'interpersonal_skill',
        'kewirausahaan',
        'basis_data',
        'rekayasa_perangkat_lunak',
        'akuntansi',
        'pemrograman_interner_bjava',
        'jaringan_komputer',
        'enterprise_res_planning',
        'anal_desain_berorientasi_o',
        'metodologi_penelitian',
        'pengaman_jaringan',
        'interaksi_manusia_komputer',
        'komputer_masyarakat',
        'praktikum_jaringan_komputer',
        'sistem_berbasis_pengetahuan',
        'kewarganegaraan',
        'sistem_pendukung_keputusan',
        'aljabar_linier_matrik',
        'analisa_sistem_informasi',
        'struktur_query_language',
        'sistem_informasi_akuntansi',
        'statistik_komputasi',
        'struktur_data',
        'sistem_operasi',
        'manajemen_sains',
        'database_administrator',
        'prakt_bahasa_pemrograman',
        'pengantar_teknologi_informasi',
        'bahasa_inggris_1',
        'bahasa_pemrograman',
        'logika_dan_algoritma',
        'pengetahuan_bisnis',
        'sistem_informasi_manajemen',
        'analisa_proses_bisnis',
        'agama',
        'bahasa_inggris_2',
        'widya_mwat_yasa',
        'prakt_struktur_query_language',
        'prakt_pemrograman_si',
        'supply_chain_manajemen',
        'data_warehouse_dan_olap',
        'proyek_pengemb_si',
        'customer_relationship_manaj',
        'prakt_anal_desain_b_obyek',
        'testing_dan_implementasi_sistem',
        'audit_sistem_informasi',
        'pemrograman_berorientasi_obyek',
        'mobile_teknologi',
        'pendidikan_pancasila',
        'kecakapan_pribadi',
        'bahasa_pemrograman_2',
        'manajemen_sistem_operasi',
        'desain_dan_manajemen_jaringan',
        'analisis_desain_terstruktur',
        'pemrograman_desktop',
        'pemrograman_web',
        'keamanan_sistem_informasi',
        'etika_komputer',
        'pemrograman_mobile',
        'tata_kelola_tekn_informasi',
        'pemrograman_terintegrasi',
        'sistem_informasi_eksekutif',
        'sistem_informasi_geografis',
        'pemodelan_dan_simulasi',
        'bahasa_indonesia',
        'bela_negara',
        'kepemimpinan',
        'manaj_proyek_sistem_informasi',
        'perencanaan_strategis_si',
        'e_bisnis',
        'kuliah_kerja_nyata',
        'praktek_kerja_lapang',
        'pra_tugas_akhir',
        'skripsi'
    ];

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

    public function search($keyword)
    {
        return $this->table('nilai')->like('nama', $keyword)->orLike('thmasuk', $keyword)->orLike('thlulus', $keyword);
    }
}
