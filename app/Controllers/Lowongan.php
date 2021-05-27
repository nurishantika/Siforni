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
        // validasi input
        if (!$this->validate([
            'judul_loker' => [
                'rules' => 'required|is_unique[loker.judul_loker]',
                'errors' => [
                    'required' => 'Judul lowongan harus diisi',
                    'is_unique' => 'Judul lowongan sudah ada'
                ]
            ],
            'isi_loker' => [
                'rules' => 'required[loker.isi_loker]',
                'errors' => [
                    'required' => 'Isi lowongan harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $this->lokerModel->save([
            'judul_loker' => $this->request->getVar('judul_loker'),
            'foto_loker' => $this->request->getVar('foto_loker'),
            'isi_loker' => $this->request->getVar('isi_loker')
        ]);

        return redirect()->to('/admin/lowongan');
    }

    public function delete($kode_loker)
    {
        $this->lokerModel->delete($kode_loker);
        return redirect()->to('/admin/lowongan');
    }
}
