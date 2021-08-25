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
        helper(['form']);
        $data = [
            'title' => 'Input Berita | Alumni SI UPNVJT',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/berita/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul_berita' => [
                'rules' => 'required|is_unique[berita.judul_berita]',
                'errors' => [
                    'required' => 'Judul berita harus diisi',
                    'is_unique' => 'Judul berita sudah terdaftar'
                ]
            ],
            'foto_berita' => [
                'rules' => 'uploaded[foto_berita]|max_size[foto_berita,5000]|is_image[foto_berita]|mime_in[foto_berita,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar cover berita',
                    'max_size' => 'Ukuran gambar terlalu besar, maksimal 5MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/berita/create')->withInput();
        }

        // ambil gambar
        $fotoBerita = $this->request->getFile('foto_berita');
        // dd($fotoBerita);

        // generate nama foto random
        $namaFoto = $fotoBerita->getRandomName();

        //pindahkan file ke folder img
        $fotoBerita->move('img', $namaFoto);

        $this->beritaModel->save([
            'judul_berita' => $this->request->getVar('judul_berita'),
            'isi_berita' => $this->request->getVar('isi_berita'),
            'foto_berita' => $namaFoto
        ]);

        session()->setFlashData('pesan', 'Berita baru berhasil ditambahkan');

        return redirect()->to('/berita/berita');
    }

    public function delete($kode_berita)
    {
        $this->beritaModel->delete($kode_berita);
        return redirect()->to('/admin/berita');
    }
}
