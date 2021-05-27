<?php

namespace App\Controllers;

use App\Models\beritaModel;
use Config\Validation;

class Berita extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        $this->beritaModel = new beritaModel();
    }

    public function index()
    {
        $berita = $this->beritaModel->findAll();

        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $berita
        ];

        // $beritaModel = new \App\Models\beritaModel();

        return view('berita/index', $data);
    }

    // Berita Index Admin
    public function berita()
    {
        $berita = $this->beritaModel->findAll();

        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $berita
        ];

        // $beritaModel = new \App\Models\beritaModel();

        return view('/admin/berita/index', $data);
    }

    // Berita User
    public function detail($kode_berita)
    {
        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $this->beritaModel->getBerita($kode_berita)
        ];

        return view('berita/detail', $data);
    }

    // Berita Admin
    public function detailadm($kode_berita)
    {
        $data = [
            'title' => 'Berita | Alumni SI UPNVJT',
            'berita' => $this->beritaModel->getBerita($kode_berita)
        ];

        return view('/admin/berita/detail', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Input Berita | Alumni SI UPNVJT',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/berita/create', $data);
    }

    public function save()
    {

        // validasi input
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required|is_unique[berita.judul_berita]',
                'errors' => [
                    'required' => 'Judul berita harus diisi',
                    'is_unique' => 'Judul berita sudah ada'
                ]
            ],
            'isi_berita' => [
                'rules' => 'required[berita.isi_berita]',
                'errors' => [
                    'required' => 'Isi berita harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $this->beritaModel->save([
            'judul_berita' => $this->request->getVar('judul_berita'),
            'isi_berita' => $this->request->getVar('isi_berita'),
            'foto_berita' => $this->request->getVar('foto_berita')
        ]);

        session()->setFlashData('pesan', 'Berita baru berhasil ditambahkan');

        return redirect()->to('/admin/berita');
    }

    public function delete($kode_berita)
    {
        $this->beritaModel->delete($kode_berita);
        return redirect()->to('/admin/berita');
    }
}
