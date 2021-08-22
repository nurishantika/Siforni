<?php

namespace App\Controllers;

use App\Models\labModel;
use Config\Validation;

class Laboratorium extends BaseController
{
    protected $labModel;
    public function __construct()
    {
        $this->labModel = new labModel();
    }

    // lab Index Admin
    public function lab()
    {
        $lab = $this->labModel->findAll();

        $data = [
            'title' => 'Laboratorium | Alumni SI UPNVJT',
            'lab' => $lab
        ];

        // $labModel = new \App\Models\labModel();

        return view('/admin/laboratorium/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Input Laboratorium | Alumni SI UPNVJT',
            'validation' => \Config\Services::validation()
        ];

        return view('/admin/laboratorium/create', $data);
    }

    public function save()
    {

        // validasi input
        if (!$this->validate([
            'nama_lab' => [
                'rules' => 'required|is_unique[lab.nama_lab]',
                'errors' => [
                    'required' => 'Nama laboratorium harus diisi',
                    'is_unique' => 'Nama laboratorium sudah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            print_r($this->request->getVar());
        }

        $this->labModel->save([
            'nama_lab' => $this->request->getVar('nama_lab')
        ]);

        session()->setFlashData('pesan', 'Laboratorium baru berhasil ditambahkan');

        return redirect()->to('/laboratorium/lab');
    }

    public function delete($id_lab)
    {
        $this->labModel->delete($id_lab);
        return redirect()->to('/laboratorium/lab');
    }
}
