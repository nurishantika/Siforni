<?php

namespace App\Controllers;

use App\Models\nilaiModel;
use App\Models\GrafikModel;
use App\Models\AlumniModel;
use CodeIgniter\CodeIgniter;
use Config\Exceptions;

class Admin extends BaseController
{
    protected $nilaiModel;
    public function __construct()
    {
        $this->nilaiModel = new nilaiModel();
        $this->GrafikModel = new GrafikModel();
        $this->AlumniModel = new AlumniModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Alumni SI UPNVJT',
            'grafik1' => $this->GrafikModel->grafik1(),
            'grafik2' => $this->GrafikModel->grafik2(),
            'grafik3' => $this->GrafikModel->grafik3()
        ];
        // dd($data);
        echo view('admin/pages/homepage', $data);
    }

    public function nilai($id_nilai)
    {
        $data = [
            'title' => 'Data Nilai | Alumni SI UPNVJT',
            'nilai' => $this->nilaiModel->getNilai($id_nilai)
        ];
        echo view('admin/data/nilai', $data);
    }

    public function input($id_nilai)
    {
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT',
            'nilai' => $this->nilaiModel->getNilai($id_nilai)
        ];

        return view('admin/data/input', $data);
    }

    public function edit($id_nilai)
    {
        $data = [
            'title' => 'Edit Data | Alumni SI UPNVJT',
            'nilai' => $this->nilaiModel->getNilai($id_nilai),
        ];

        return view('admin/edit', $data);
    }

    public function alumni()
    {

        $currentPage = $this->request->getVar('page_alumni') ? $this->request->getVar('page_alumni') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $alumn = $this->AlumniModel->search($keyword);
        } else {
            $alumn = $this->AlumniModel;
        }

        $data = [
            'title' => 'Data Alumni | Alumni SI UPNVJT',
            // 'alumni' => $this->alumniModel->getAlumni(),
            'alumni' => $alumn->paginate(3, 'alumni'),
            'pager' => $this->AlumniModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/data/data_alumni', $data);
    }

    // Detail Alumni Admin
    public function detailalm($id)
    {
        $data = [
            'title' => 'Detail Alumni | Alumni SI UPNVJT',
            'alumni' => $this->AlumniModel->getAlumni($id)
        ];


        // jika data tidak ada di tabel
        if (empty($data['alumni'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Alumni ' . $id . ' tidak ditemukan.');
        }

        return view('admin/data/detail', $data);
    }

    public function delete($id)
    {
        $this->AlumniModel->delete($id);
        return redirect()->to('/admin/alumni');
    }
}
