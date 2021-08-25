<?php

namespace App\Controllers;

use App\Models\lokerModel;

class Lowongan extends BaseController
{
    protected $lokerModel;
    public function __construct()
    {
        $this->lokerModel = new lokerModel();
    }

    public function index()
    {
        $lokerModel = $this->lokerModel->findAll();

        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $lokerModel
        ];

        //$lokerModel = new \App\Models\lokerModel();
        //$lokerModel = new lokerModel();

        return view('lowongan/index', $data);
    }

    // Index Lowongan Admin
    public function lowongan()
    {
        $lokerModel = $this->lokerModel->findAll();

        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $lokerModel
        ];

        //$lokerModel = new \App\Models\lokerModel();
        //$lokerModel = new lokerModel();

        return view('admin/lowongan/index', $data);
    }

    public function detail($kode_loker)
    {
        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $this->lokerModel->getLoker($kode_loker)
        ];

        return view('lowongan/detail', $data);
    }

    // Detail Lowongan Admin
    public function detailadm($kode_loker)
    {
        $data = [
            'title' => 'Lowongan Pekerjaan | Alumni SI UPNVJT',
            'lokerModel' => $this->lokerModel->getLoker($kode_loker)
        ];

        return view('/admin/lowongan/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Input Lowongan | Alumni SI UPNVJT',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/lowongan/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul_loker' => [
                'rules' => 'required|is_unique[loker.judul_loker]',
                'errors' => [
                    'required' => 'Judul lowongan pekerjaan harus diisi',
                    'is_unique' => 'Judul lowongan pekerjaan sudah terdaftar'
                ]
            ],
            'foto_loker' => [
                'rules' => 'uploaded[foto_loker]|max_size[foto_loker,5000]|is_image[foto_loker]|mime_in[foto_loker,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar cover lowongan pekerjaan',
                    'max_size' => 'Ukuran gambar terlalu besar, maksimal 5MB',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/lowongan/create')->withInput();
        }

        // ambil gambar
        $fotoLoker = $this->request->getFile('foto_loker');
        // dd($fotoBerita);

        // generate nama foto random
        $namaFoto = $fotoLoker->getRandomName();

        //pindahkan file ke folder img
        $fotoLoker->move('img', $namaFoto);

        $this->lokerModel->save([
            'judul_loker' => $this->request->getVar('judul_loker'),
            'isi_loker' => $this->request->getVar('isi_loker'),
            'foto_loker' => $namaFoto
        ]);

        session()->setFlashData('pesan', 'Lowongan pekerjaan baru berhasil ditambahkan');

        return redirect()->to('/lowongan/lowongan');
    }

    public function delete($kode_loker)
    {
        $this->lokerModel->delete($kode_loker);
        return redirect()->to('/admin/lowongan');
    }
}
