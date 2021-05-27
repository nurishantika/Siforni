<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NilaiModel;
use App\Models\AlumniModel;


class Nilai extends BaseController
{
    protected $NilaiModel;
    protected $AlumniModel;

    public function __construct()
    {
        $this->NilaiModel = new NilaiModel();
        $this->AlumniModel = new AlumniModel();
    }

    public function index()
    {
        $nilai = $this->NilaiModel->findAll();

        $data = [
            'title' => 'Data Nilai Alumni | Alumni SI UPNVJT',
            'nilai' => $this->NilaiModel->getNilai(),
        ];

        return view('admin/data/nilai', $data);
    }

    public function nilai()
    {
        $nilai = $this->NilaiModel->findAll();

        $data = [
            'title' => 'Data Nilai Alumni | Alumni SI UPNVJT',
            'nilai' => $this->NilaiModel->getNilai(),
        ];

        return view('alumni/nilai', $data);
    }

    public function detail($id_nilai)
    {
        $data = [
            'title' => 'Data Nilai Alumni | Alumni SI UPNVJT'
        ];
        $nilai = $this->NilaiModel->getNilai($id_nilai);

        if (isset($nilai[0])) {
            // $data = [
            //     'nilai' => $nilai[0],
            // ];
            $data['nilai'] = $nilai[0];
        } else {
            // TODO : Kondisi ketika data tidak lengkap
            dd("Data tidak lengkap");
        }

        //$data['nilai'] = $this->NilaiModel->getNilai($id_nilai)->first();
        //dd($data['nilai']);
        return view('admin/data/details', $data);
    }

    public function create()
    {
        // $nilai = $this->NilaiModel->findAll();
        $alumni = $this->AlumniModel->findAll();
        $data = [
            'title' => 'Input Nilai Alumni | Alumni SI UPNVJT',
            // 'nilai' => $this->NilaiModel->getNilai(),
            'alumni' => $this->AlumniModel->getAlumni(),
            'validation' => \Config\Services::validation()
        ];
        $alumni = $this->AlumniModel->getAlumni();
        // dd($data['alumni']);
        return view('admin/data/input', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'npm' => [
                'rules' => 'required|is_unique[alumni.npm]',
                'errors' => [
                    'required' => 'NPM wajib diisi!',
                    'is_unique' => 'NPM sudah terdaftar!'
                ]
            ]
        ])) {

            return redirect()->to('/nilai/create')->withInput();
        }

        $this->nilaiModel->save([
            'npm' => $this->request->getVar('npm'),
            'kalkulus_1' => $this->request->getVar('kalkulus_1'),
            'prakt_struktur_data' => $this->request->getVar('prakt_struktur_data'),
            'etika_profesi' => $this->request->getVar('etika_profesi'),
            'interpersonal_skill' => $this->request->getVar('interpersonal_skill'),
            'kewirausahaan' => $this->request->getVar('kewirausahaan'),
            'basis_data' => $this->request->getVar('basis_data'),
            'rekayasa_perangkat_lunak' => $this->request->getVar('rekayasa_perangkat_lunak'),
            'akuntansi' => $this->request->getVar('akuntansi'),
            'pemrograman_interner_bjava' => $this->request->getVar('pemrograman_interner_bjava'),
            'jaringan_komputer' => $this->request->getVar('jaringan_komputer'),
            'enterprise_res_planning' => $this->request->getVar('enterprise_res_planning'),
            'anal_desain_berorientasi_o' => $this->request->getVar('anal_desain_berorientasi_o'),
            'metodologi_penelitian' => $this->request->getVar('metodologi_penelitian'),
            'pengaman_jaringan' => $this->request->getVar('pengaman_jaringan'),
            'interaksi_manusia_komputer' => $this->request->getVar('interaksi_manusia_komputer'),
            'komputer_masyarakat' => $this->request->getVar('komputer_masyarakat'),
            'praktikum_jaringan_komputer' => $this->request->getVar('praktikum_jaringan_komputer'),
            'sistem_berbasis_pengetahuan' => $this->request->getVar('sistem_berbasis_pengetahuan'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'sistem_pendukung_keputusan' => $this->request->getVar('sistem_pendukung_keputusan'),
            'aljabar_linier_matrik' => $this->request->getVar('aljabar_linier_matrik'),
            'analisa_sistem_informasi' => $this->request->getVar('analisa_sistem_informasi'),
            'struktur_query_language' => $this->request->getVar('struktur_query_language'),
            'sistem_informasi_akuntansi' => $this->request->getVar('sistem_informasi_akuntansi'),
            'statistik_komputasi' => $this->request->getVar('statistik_komputasi'),
            'struktur_data' => $this->request->getVar('struktur_data'),
            'sistem_operasi' => $this->request->getVar('sistem_operasi'),
            'manajemen_sains' => $this->request->getVar('manajemen_sains'),
            'database_administrator' => $this->request->getVar('database_administrator'),
            'prakt_bahasa_pemrograman' => $this->request->getVar('prakt_bahasa_pemrograman'),
            'pengantar_teknologi_informasi' => $this->request->getVar('pengantar_teknologi_informasi'),
            'bahasa_inggris_1' => $this->request->getVar('bahasa_inggris_1'),
            'bahasa_pemrograman' => $this->request->getVar('bahasa_pemrograman'),
            'logika_dan_algoritma' => $this->request->getVar('logika_dan_algoritma'),
            'pengetahuan_bisnis' => $this->request->getVar('pengetahuan_bisnis'),
            'sistem_informasi_manajemen' => $this->request->getVar('sistem_informasi_manajemen'),
            'analisa_proses_bisnis' => $this->request->getVar('analisa_proses_bisnis'),
            'agama' => $this->request->getVar('agama'),
            'bahasa_inggris_2' => $this->request->getVar('bahasa_inggris_2'),
            'widya_mwat_yasa' => $this->request->getVar('widya_mwat_yasa'),
            'prakt_struktur_query_language' => $this->request->getVar('prakt_struktur_query_language'),
            'prakt_pemrograman_si' => $this->request->getVar('prakt_pemrograman_si'),
            'supply_chain_manajemen' => $this->request->getVar('supply_chain_manajemen'),
            'data_warehouse_dan_olap' => $this->request->getVar('data_warehouse_dan_olap'),
            'proyek_pengemb_si' => $this->request->getVar('proyek_pengemb_si'),
            'customer_relationship_manaj' => $this->request->getVar('customer_relationship_manaj'),
            'prakt_anal_desain_b_obyek' => $this->request->getVar('prakt_anal_desain_b_obyek'),
            'testing_dan_implementasi_sistem' => $this->request->getVar('testing_dan_implementasi_sistem'),
            'audit_sistem_informasi' => $this->request->getVar('audit_sistem_informasi'),
            'pemrograman_berorientasi_obyek' => $this->request->getVar('pemrograman_berorientasi_obyek'),
            'mobile_teknologi' => $this->request->getVar('mobile_teknologi'),
            'pendidikan_pancasila' => $this->request->getVar('pendidikan_pancasila'),
            'kecakapan_pribadi' => $this->request->getVar('kecakapan_pribadi'),
            'bahasa_pemrograman_2' => $this->request->getVar('bahasa_pemrograman_2'),
            'manajemen_sistem_operasi' => $this->request->getVar('manajemen_sistem_operasi'),
            'desain_dan_manajemen_jaringan' => $this->request->getVar('desain_dan_manajemen_jaringan'),
            'analisis_desain_terstruktur' => $this->request->getVar('analisis_desain_terstruktur'),
            'pemrograman_desktop' => $this->request->getVar('pemrograman_desktop'),
            'pemrograman_web' => $this->request->getVar('pemrograman_web'),
            'keamanan_sistem_informasi' => $this->request->getVar('keamanan_sistem_informasi'),
            'etika_komputer' => $this->request->getVar('etika_komputer'),
            'pemrograman_mobile' => $this->request->getVar('pemrograman_mobile'),
            'tata_kelola_tekn_informasi' => $this->request->getVar('tata_kelola_tekn_informasi'),
            'pemrograman_terintegrasi' => $this->request->getVar('pemrograman_terintegrasi'),
            'sistem_informasi_eksekutif' => $this->request->getVar('sistem_informasi_eksekutif'),
            'sistem_informasi_geografis' => $this->request->getVar('sistem_informasi_geografis'),
            'pemodelan_dan_simulasi' => $this->request->getVar('pemodelan_dan_simulasi'),
            'bahasa_indonesia' => $this->request->getVar('bahasa_indonesia'),
            'bela_negara' => $this->request->getVar('bela_negara'),
            'kepemimpinan' => $this->request->getVar('kepemimpinan'),
            'manaj_proyek_sistem_informasi' => $this->request->getVar('manaj_proyek_sistem_informasi'),
            'perencanaan_strategis_si' => $this->request->getVar('perencanaan_strategis_si'),
            'e_bisnis' => $this->request->getVar('e_bisnis'),
            'kuliah_kerja_nyata' => $this->request->getVar('kuliah_kerja_nyata'),
            'praktek_kerja_lapang' => $this->request->getVar('praktek_kerja_lapang'),
            'pra_tugas_akhir' => $this->request->getVar('pra_tugas_akhir'),
            'skripsi' => $this->request->getVar('skripsi')
        ]);

        return redirect()->to('/nilai');
    }
}
