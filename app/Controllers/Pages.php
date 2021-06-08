<?php

namespace App\Controllers;

use App\Models\beritaModel;
use App\Models\lokerModel;

class Pages extends BaseController
{
    protected $beritaModel;
    protected $lokerModel;

    public function __construct()
    {
        $this->beritaModel = new beritaModel();
        $this->lokerModel = new lokerModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Alumni SI UPNVJT',
            'berita' => $this->beritaModel->findAll(),
            'lokerModel' => $this->lokerModel->findAll()
        ];
        echo view('pages/homepage', $data);
    }

    // public function index()
    // {
    //     $berita = $this->beritaModel->findAll();
    //     $this->beritaModel->select('*');
    //     $this->beritaModel->from('berita');
    //     $this->beritaModel->orderBy('kode_berita', 'DESC');
    //     $this->beritaModel->limit(3, 0);
    //     $query = $this->beritaModel->get();
    //     return $query;
    //     echo view('pages/homepage');
    // }

    public function login()
    {
        $data = [
            'title' => 'Login | Alumni SI UPNVJT'
        ];
        echo view('pages/login', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Alumni SI UPNVJT'
        ];
        echo view('pages/daftar', $data);
    }

    public function input_data()
    {
        $data = [
            'title' => 'Input Data | Alumni SI UPNVJT'
        ];
        echo view('pages/input_data', $data);
    }

    //--------------------------------------------------------------------

}
